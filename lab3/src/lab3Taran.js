const handleChangeNumber = (img) => {

  const generateNumber = () => {
    const number = Math.round(Math.random() * 5);
    if (number === 0) {
      return generateNumber();
    }

    return number;
  };

  const path = './img/';
  const numberOfPicture = generateNumber();
  img.setAttribute("src", `${path}${numberOfPicture}.jpg`)
  img.style.width = "";
  img.style.height = "";
  img.style.border = "";
  img.setAttribute("alt", "space");

  document.getElementsByClassName("width-settings")[0].value = "";
  document.getElementsByClassName("height-settings")[0].value = "";
  document.getElementsByClassName("alt-text")[0].value = "";
  document.getElementsByClassName("border-width")[0].value = "";
}

const handleSetSettings = () => {
  const img = document.getElementsByClassName("image")[0];
  const width = document.getElementsByClassName("width-settings")[0].value + "px";
  const height = document.getElementsByClassName("height-settings")[0].value + "px";
  const altText = document.getElementsByClassName("alt-text")[0].value
  const borderWidth = document.getElementsByClassName("border-width")[0].value + "px";
  const border = `solid ${borderWidth} red`;
  img.style.width = width;
  img.style.height = height;
  img.style.border = border;
  img.setAttribute("alt", altText.toString());
  console.log(width)
  console.log(height)
}

