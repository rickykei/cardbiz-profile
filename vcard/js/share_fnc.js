// 選擇和 DOM 有關的元素
const btn = document.querySelector("button");
const result = document.querySelector(".result");

 

async function handleNavigatorShare() {
  try {
    // 使用 Web Share API
    await navigator.share(shareData);
   // result.textContent = "感謝你的的分享";
  } catch (err) {
    // 使用者拒絕分享或發生錯誤
    const { name, message } = err;
    if (name === "AbortError") {
   //   result.textContent = "您已取消分享此訊息";
    } else {
     // result.textContent = err;
      console.log("發生錯誤", err);
    }
  }
}

function handleNotSupportNavigatorShare() {
  let contentToCopy = document.querySelector("#content-to-copy");
  contentToCopy.value = shareData.url;
  contentToCopy.setAttribute("type", "text"); // 不是 hidden 才能複製
  contentToCopy.select();

  try {
    var successful = document.execCommand("copy");
    var msg = successful ? "成功" : "失敗";
    alert(`${shareData.url} - 複製${msg}`);
  } catch (err) {
    alert("Oops, unable to copy");
  }

  /* unselect the range */
  contentToCopy.setAttribute("type", "hidden");
  window.getSelection().removeAllRanges();
}
