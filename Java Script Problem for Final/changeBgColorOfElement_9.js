function changeBackgroundColor(elementId, newColor) {
    const element = document.getElementById(elementId);
    if (element) {
        element.addEventListener("mouseenter", () => {
            element.style.backgroundColor = newColor;
        });
    }
}
