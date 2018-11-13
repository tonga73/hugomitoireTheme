// Header Scrolled Styles
window.onscroll = () => {
    window.addEventListener('scroll', () => {
        const scrolled = window.scrollY;
        let header = document.getElementById("main-header");
    
        if (scrolled === 0) {
          header.classList.remove("scrolled");
        } else {
          header.classList.add("scrolled");
        }
      })
}