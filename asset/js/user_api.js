function deleteBtn() {
  document.querySelectorAll(".deleteBtn").forEach((button) => {
    button.addEventListener("click", function () {
      const user_id = this.getAttribute("value-id");
      console.log(user_id);
      const formData = new FormData();
      formData.append("user_id", user_id);
      fetch("../backend/userDelete.php", {
        method: "post",
        body: formData,
      })
        .then((response) => response.text())
        .then((data) => {
          if (data.includes("success")) {
            document.getElementById("popup-result").style.display = "flex";
            this.reset();
          } else {
            alert("delete fail");
          }
        })
        .catch((err) => {
          console.log("error: " + err);
        });
    });
  });
}

deleteBtn();

function fetchUser() {
  const searchQuery = document.getElementById("search").value;
  fetch("../backend/userAccountContent.php?search=" + searchQuery)
    .then((respone) => respone.text())
    .then((data) => {
      document.querySelector(".content-part").innerHTML = data;
      console.log("data: " + data);
      deleteBtn();
    });
}
