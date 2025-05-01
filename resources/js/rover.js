let rover = {
    x: 2,
    y: 2,
};

function move(dx, dy) {
    const newX = rover.x + dx;
    const newY = rover.y + dy;

    if (newX >= 0 && newX < 10 && newY >= 0 && newY < 10) {
        const targetCell = document.querySelector(
            `.cell[data-x="${newX}"][data-y="${newY}"]`
        );
        if (!targetCell.classList.contains("bg-dark")) {
            const currentCell = document.querySelector(
                `.cell[data-x="${rover.x}"][data-y="${rover.y}"]`
            );
            currentCell.classList.remove("bg-primary");

            targetCell.classList.add("bg-primary");
            rover.x = newX;
            rover.y = newY;
        } else {
            alert("Obstacle encountered!");
        }
    } else {
        alert("Out of bounds!");
    }
}

document.addEventListener("DOMContentLoaded", () => {
    const startCell = document.querySelector(
        `.cell[data-x="${rover.x}"][data-y="${rover.y}"]`
    );
    startCell.classList.add("bg-primary");

    document
        .getElementById("forwardBtn")
        .addEventListener("click", () => move(0, 1));
    document
        .getElementById("leftBtn")
        .addEventListener("click", () => move(-1, 0));
    document
        .getElementById("rightBtn")
        .addEventListener("click", () => move(1, 0));
    document.getElementById("resetBtn").addEventListener("click", () => {
        // Reload the page to reset everything
        location.reload();
    });
});
