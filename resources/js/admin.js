function scrollToBootom(){
    let chatContent = $('.chat-content');
    chatContent.scrollTop(chatContent.prop("scrollHeight"));
}

window.Echo.private("chat."+loggedInUserId).listen(
    "ChatEvent",
    (e) => {
        console.log(e);
        let html = `
        <div class="chat-item chat-left" style=""><img style="width:50px;height:50px;object-fit:cover;" src="${e.avatar}"><div class="chat-details"><div class="chat-text">${e.message}</div><div class="chat-time">sending...</div></div></div>
        `
        $('.chat-content').append(html);
        scrollToBootom();
    }
);
