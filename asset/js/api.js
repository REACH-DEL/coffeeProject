document.getElementById("placeForm").addEventListener("submit", function (e) {
  e.preventDefault();

  const formData = new FormData(document.getElementById("placeForm"));

  fetch("../backend/productController.php", {
    method: "POST",
    body: formData,
  })
    .then((response) => {
      if (!response.ok) {
        throw new Error("Network response was not ok: " + response.status);
      }
      return response.text();
    })
    .then((data) => {
      if (data.includes("success")) {
        document.getElementById("pop-up").style.display = "none";
        document.getElementById("popup-result").style.display = "flex";
        this.reset();
      } else {
        alert("Error saving place. Please try again.");
      }
    })
    .catch((error) => {
      alert("Error: " + error.message);
    });
});
function deleteBtn() {
  document.querySelectorAll(".deleteBtn").forEach((button) => {
    button.addEventListener("click", function () {
      const pid = this.getAttribute("value-id");
      const formData = new FormData();
      formData.append("pid", pid);
      fetch("../backend/deleteHandler.php", {
        method: "POST",
        body: formData,
      })
        .then((response) => response.text())
        .then((data) => {
          alert("Delete success" + data);
        })
        .catch((error) => {
          alert("Error: " + error.message);
        });
    });
  });
}

function editBtn() {
  document.querySelectorAll(".editBtn").forEach((button) => {
    button.addEventListener("click", function () {
      document.getElementById("edit-popup").style.display = "flex";
      const pid = this.getAttribute("value-id");
      const formData = new FormData();
      formData.append("edit-id", pid);
      fetch("../backend/editController.php", {
        method: "POST",
        body: formData,
      })
        .then((response) => response.text())
        .then((data) => {
          document.querySelector("#edit-popup .body").innerHTML = data;
        })
        .catch((error) => {
          alert("Error: " + error.message);
        });
    });
  });
}

// document.getElementById("changeBtn").addEventListener("click", function (e) {
//   e.preventDefault();

//   const formData = new FormData(document.getElementById("formEdit"));

//   fetch("../backend/editHandler.php", {
//     method: "POST",
//     body: formData,
//   })
//     .then((response) => {
//       if (!response.ok) {
//         throw new Error("Network response was not ok: " + response.status);
//       }
//       return response.text();
//     })
//     .then((data) => {
//       if (data.includes("success")) {
//         document.getElementById("edit-popup").style.display = "none";
//         document.getElementById("popup-result").style.display = "flex";
//         this.reset();
//       } else {
//         alert("Error saving place. Please try again.");
//       }
//     })
//     .catch((error) => {
//       alert("Error: " + error.message);
//     });
// });
function fetchContent() {
  const searchQuery = document.getElementById("search").value;
  const listQuery = document.getElementById("list").value;
  console.log(searchQuery + "  " + listQuery);
  const url =
    "search=" + encodeURIComponent(searchQuery) + "&category=" + listQuery;
  fetch("../backend/productContent.php?" + url)
    .then((response) => {
      if (!response.ok) {
        throw new Error("Network response was not ok");
      }
      return response.text();
    })
    .then((data) => {
      document.querySelector(".content-part").innerHTML = data;
      editBtn();
      deleteBtn();
    })
    .catch((error) => {
      alert("Error: " + error.message);
    });
}
editBtn();
deleteBtn();
