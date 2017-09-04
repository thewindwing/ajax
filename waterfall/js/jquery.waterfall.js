/*封装一个基于jquery的插件方法*/
/*这是jquery的插件方法注册*/
/*防止变量污染*/
/*把$变成局部变量*/
(function($){
    $.fn.waterfall = function () {
        /*实现瀑布流布局*/
        /*
        * 1.第一排顶部显示
        * 2.其他排列根据最矮的列
        * */
        /*this 指向谁调用指向谁 jquery对象*/
        console.log(this);
        /* 瀑布流容器 */
        var $parent = this;
        var parentWidth = $parent.width();
        /* 子容器 */
        var $child = $parent.children();
        var childWidth = $child.width();
        /*确认  一行排几个*/
        var sum = 5;
        /*确认  每一列的间距*/
        var space = (parentWidth-sum*childWidth)/(sum-1);

        /*核心  记录每一列的变化高度 */
        var colHeightArray = [];

        /*定位*/
        $child.each(function (i, item) {
            var $item = $(item);
            var height = $item.height();
            if(i<sum){
                /*1.第一排顶部显示*/
                $item.css({
                    top:0,
                    left: i * (childWidth+space)
                });
                colHeightArray[i] = height;
            }else{
                /*2.其他排列根据最矮的列*/
                /*怎么找到最矮的列*/
                var minIndex = 0;
                var minHeight = colHeightArray[minIndex];
                $.each(colHeightArray,function (i,item) {
                    if(minHeight > item){
                        minIndex = i;
                        minHeight = item;
                    }
                });
                $item.css({
                    top: minHeight + space,
                    left: minIndex * (childWidth+space)
                });
                /*关键  记录高度*/
                colHeightArray[minIndex] = minHeight + space + height;
            }
        });
        /*撑开高度*/
        var maxHeight =  colHeightArray[0];
        $.each(colHeightArray,function (i,item) {
            if(maxHeight < item){
                maxHeight = item;
            }
        })
        $parent.height(maxHeight);
    };
})(jQuery);