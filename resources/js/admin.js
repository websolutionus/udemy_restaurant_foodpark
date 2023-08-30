window.Echo.private("chat."+loggedInUserId).listen(
    "ChatEvent",
    (e) => {
        console.log(e);
    }
);
