document.addEventListener("DOMContentLoaded", () => {
    const videoItems = document.querySelectorAll(".video-item");
    const modal = document.getElementById("videoModal");
    const videoFrame = document.getElementById("videoFrame");
    const closeModal = document.querySelector(".close");

    videoItems.forEach(item => {
      item.addEventListener("click", () => {
        const videoUrl = item.getAttribute("data-video");
        if (videoUrl) {
          videoFrame.src = `${videoUrl}?autoplay=1`;
          modal.style.display = "flex";
        }
      });
    });

    closeModal.addEventListener("click", () => {
      modal.style.display = "none";
      videoFrame.src = "";
    });

    window.addEventListener("click", (e) => {
      if (e.target === modal) {
        modal.style.display = "none";
        videoFrame.src = "";
      }
    });
  });