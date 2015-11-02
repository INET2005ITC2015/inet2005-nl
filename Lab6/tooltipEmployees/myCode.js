$(document).ready(function(){
    $('td.tip').each(function() {
        $(this).qtip({
            /*content: 'This is an active list element',*/
            content: {
             url: 'empDepartmentInfo.php',
             data: { empID: $(this).attr('id') },
             method: 'get'
             },
            show: 'mouseover',
            hide: 'mouseout',
            style: {
                name: 'dark' // Inherit from preset style
            },
            position: {
                corner: {
                    target: 'bottomRight',
                    tooltip: 'topLeft'
                }
            }
        });
    });
});





