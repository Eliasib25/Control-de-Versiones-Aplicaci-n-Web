$(document).ready(function() {
    $("div.ftl-vertical-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.ftl-vertical-tab>div.ftl-vertical-tab-content").removeClass("active");
        $("div.ftl-vertical-tab>div.ftl-vertical-tab-content").eq(index).addClass("active");
    });
});