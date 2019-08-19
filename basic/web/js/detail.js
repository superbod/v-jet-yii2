let PostPage = function(){
    let self = this;
    self.postId = 0;


    self.init = function(){
        self.postId = self.getUrlParams('id');
        self.addCommentAction();
    };

    self.getUrlParams = function(paramName = ''){
        let params = window
            .location
            .search
            .replace('?','')
            .split('&')
            .reduce(
                function(p,e){
                    var a = e.split('=');
                    p[ decodeURIComponent(a[0])] = decodeURIComponent(a[1]);
                    return p;
                },
                {}
            );

        return paramName !== "" ? params[paramName] : params;
    };

    self.makeCommentBlock = function(item) {
        let commentElement = $('<div>',{
            id: item.id,
            class: 'comment',
        });
        let commentAuthor = $('<span>', {class:'comment-author', text: item[0]['author_name'] + ' - '});
        let commentText = $('<span>', {class: 'comment-text', text: item[0]['comment']});
        commentElement.append(commentAuthor,commentText);
        $('.comments').append(commentElement);
    };

    self.addCommentAction = function() {
        $( "#comment-form" ).on( "submit", function( event ) {
            event.preventDefault();
            let args = {
                blogID: self.postId
            };
            $.each($('#comment-form').serializeArray(), function(i, field) {
                args[field.name] = field.value;
            });

            $.ajax({
                type: "POST",
                url: "/blog/create-comment",
                data: {args: args},
                success: function (res) {
                    self.makeCommentBlock(res);
                    let commentBlock = $('#count-comments');
                    let countComments = parseInt(commentBlock.text());
                    commentBlock.text(countComments + 1);
                }
            });
        });
    };

    self.init();
};

$(document).ready(function () {
   new PostPage();
});