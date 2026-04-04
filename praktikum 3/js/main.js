const c = document.getElementById("canvas");
const x = c.getContext("2d");

let box = { x: 100, y: 100, size: 50 };
let score = 0;

function draw() {
  x.clearRect(0, 0, 400, 400);

  // objek kotak
  x.fillStyle = "red";
  x.fillRect(box.x, box.y, box.size, box.size);

  // skor
  x.fillStyle = "white";
  x.font = "16px Arial";
  x.fillText("Score: " + score, 10, 20);
}

c.onclick = e => {
  let rect = c.getBoundingClientRect();
  let mx = e.clientX - rect.left;
  let my = e.clientY - rect.top;

  if (
    mx > box.x &&
    mx < box.x + box.size &&
    my > box.y &&
    my < box.y + box.size
  ) {
    score++;

    // posisi random 
    box.x = Math.random() * (400 - box.size);
    box.y = Math.random() * (400 - box.size);
  }
};

setInterval(draw, 100);