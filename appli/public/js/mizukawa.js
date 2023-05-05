const test = document.querySelector(".test");
console.log(test);

// 間隔
const delay_ms = 2000;

window.addEventListener('scroll', () => {
  window.setInterval(() => {
    const now = new Date();
    console.log(now.getTime());
    
  }, delay_ms);

},{once: true});
