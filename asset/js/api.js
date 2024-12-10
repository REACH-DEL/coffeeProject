document.getElementById("placeForm").addEventListener("submit", function (e) {
  e.preventDefault();

  const formData = new FormData(document.getElementById("placeForm"));

  fetch("backend/productController.php", {
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

document.getElementById("typeBtn").addEventListener("submit", function (e) {
  e.preventDefault();

  const typeform = new FormData(document.getElementById("typeBtn"));

  fetch(backend / productContent.php, {
    method: "POST",
    body: typeform,
  })
    .then((response) => {
      return response.text();
    })
    .catch((error) => {
      alert("Error: " + error.message);
    });
});
