const colorPickerElements = document.querySelectorAll("#colorPicker");
for (let i = 0; i < colorPickerElements.length; i++) {
    const colorPicker = colorPickerElements[i];
    const colorText = colorPicker.textContent.trim();
    const classColor = { M: 'green', I: 'blue', S: 'yellow' };
    colorPicker.classList.add(classColor[colorText] || 'default');
}
