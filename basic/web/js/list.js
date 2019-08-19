let BlogPage = function() {
    let self = this;

    self.init = function(){
        self.createPostAction();
        self.initSlider();
    };

    self.initSlider = function() {
        $("#blog-slider").slick({
            slidesToShow: 1,
            slidesToScroll: 1
        });
    };
    self.createPostAction = function(){
        $( "#post-form" ).on( "submit", function( event ) {
            event.preventDefault();
            let args = {};
            $.each($('#post-form').serializeArray(), function(i, field) {
                args[field.name] = field.value;
            });

            $.ajax({
                type: "POST",
                url: "/blog/create-post",
                data: {args: args},
                success: function (res) {
                    self.renderBlogListBlock(res);
                }
            });
        });
    };

    self.renderBlogListBlock = function(blogList){
        blogList.forEach(function(item){
            let blogElement = $('<div>',{
                id: item.id,
                class: 'blog-element',
            });
            let postName = $('<a>',{
                class: 'post-name',
                text: item.name,
                href: 'detail.html?id=' + item.id
            });
            let authorName = $('<div>',{ class: 'author-name', text: 'Posted By ' + item['author_name']});
            let text = $('<div>',{text: item.text.length > 165 ? item.text.slice(0,165) + ' ...' : item.text});
            let bottomBlock = $('<div>',{class: 'bottom-block'});
            let publishDate = $('<div>',{class: 'publish-date', text: item['date'].slice(0,10)});
            let commentsNumber = $('<div>',{class: 'comments-number', text: item['comment_numbers'] + ' comments'});
            bottomBlock.append(publishDate,commentsNumber,authorName);
            blogElement.append(postName,text,bottomBlock);
            $('.blog-list').append(blogElement);
        });
    };

    self.init();
};

$(document).ready(function () {
    new BlogPage();
});