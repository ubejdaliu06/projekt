const photos = [
    
    "E-shisha-BANANA-removebg-preview.png",
    "E-shisha-KIWI-removebg-preview.png",
    "E-shisha-STRAWBERRY-removebg-preview.png",
    "E-shisha-HASH-removebg-preview.png",
    "pica.jpg-removebg-preview.png",
  ];
  
  
  let currentPhotoIndex = 0;
  const photoList = document.getElementById("photoList");
  
  
  photos.forEach(photoPath => {
      const img = document.createElement("img");
      img.src = photoPath;
      img.classList.add("photo");
      photoList.appendChild(img);
  });
  
  function changePhoto() {
      currentPhotoIndex = (currentPhotoIndex + 1) % photos.length;
      const newPosition = -currentPhotoIndex * 100 + "%";
      photoList.style.transform = `translateX(${newPosition})`;
  }
  
  
  setInterval(changePhoto, 3000);