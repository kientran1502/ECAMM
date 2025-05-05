const tabs = document.querySelectorAll('[data-bs-toggle="tab"]');
const welcome = document.getElementById("welcome-message");
const tabContent = document.getElementById("myTabContent");

tabs.forEach((tab) => {
  tab.addEventListener("click", () => {
    welcome.classList.add("d-none"); // Ẩn welcome
    tabContent.classList.remove("d-none"); // Hiện nội dung tab
  });
});

// Nếu click logo/tên trang → hiện lại welcome
document.getElementById("logo").addEventListener("click", () => {
  welcome.classList.remove("d-none");
  tabContent.classList.add("d-none");

  // Bỏ active tất cả tabs
  tabs.forEach((tab) => {
    tab.classList.remove("active");
    tab.setAttribute("aria-selected", "false");
  });

  // Ẩn nội dung các tab
  document.querySelectorAll(".tab-pane").forEach((pane) => {
    pane.classList.remove("active", "show");
  });
});


