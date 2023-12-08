
console.log('Not for Sale for Minors - Products sold on this site may contain nicotine which is a highly addictive substance.! ')


alert('Not for Sale for Minors - Products sold on this site may contain nicotine which is a highly addictive substance.! ')



// const photos = [
//  "oxbar_magic_maze_pro_10000_disposable_-_pod_juice_default-removebg-preview.png",
//  "hamilton_devices_butterfly_510_vaporizer_battery_-_default_1-removebg-preview.png",
//  "ijoy_bar_sd10000_disposable_-_default-removebg-preview.png",
//  "geek_vape_-_t200_aegis_touch_-_kits_-_all_colors-removebg-preview.png",
//  "snowwolf_easy_smart_ea9000_disposable_-_default-removebg-preview.png",
//  "spaceman_10k_pro_disposable_-_default-removebg-preview.png",
// ];
const photos = [
  "oxbar_magic_maze_pro_10000_disposable_-_pod_juice_default-removebg-preview.png",
  "hamilton_devices_butterfly_510_vaporizer_battery_-_default_1-removebg-preview.png",
  "ijoy_bar_sd10000_disposable_-_default-removebg-preview.png",
  "geek_vape_-_t200_aegis_touch_-_kits_-_all_colors-removebg-preview.png",
  "snowwolf_easy_smart_ea9000_disposable_-_default-removebg-preview.png",
  "spaceman_10k_pro_disposable_-_default-removebg-preview.png",
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

// photos.push("hamilton_devices_butterfly_510_vaporizer_battery_-_default_1-removebg-preview.png");
// addPhotosToRow();
// photos.push("ijoy_bar_sd10000_disposable_-_default-removebg-preview.png");
// addPhotosToRow();
// photos.push("geek_vape_-_t200_aegis_touch_-_kits_-_all_colors-removebg-preview.png");
// addPhotosToRow();
// photos.push("snowwolf_easy_smart_ea9000_disposable_-_default-removebg-preview.png");
// addPhotosToRow();
// photos.push("spaceman_10k_pro_disposable_-_default-removebg-preview.png");
// addPhotosToRow();

// objIndex = myArray.findIndex((obj => obj.id == 1));


// console.log("Before update: ", myArray[objIndex])


// myArray[objIndex].name = "Laila"


// console.log("After update: ", myArray[objIndex])

// function ndrroImg(){
// document.getElementById('fotografit').src =imgArray[i];
//  if(i<imgArray.length-1){
//   i++;
//  }
// }
// function ktheImg(){
//   document.getElementById('fotografit').src =imgArray[i];
//    if(i<imgArray.length+1){
//     i--;
//    }
//   }


  


