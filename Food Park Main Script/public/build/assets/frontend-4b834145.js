function o(){let t=$(".fp__chat_body");t.scrollTop(t.prop("scrollHeight"))}window.Echo.private("chat."+loggedInUserId).listen("ChatEvent",t=>{console.log(t);let s=`<div class="fp__chating"><div class="fp__chating_img"><img src="${t.avatar}"
        class="img-fluid w-100" style="border-radius: 50%;">
        </div><div class="fp__chating_text">
            <p>${t.message}</p>
        </div>
        </div>`;$(".fp__chat_body").append(s),o(),$(".sunseen-message-count").text(1)});
