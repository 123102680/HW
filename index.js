
  var index = 0;
  //change the pic
  function ChangeImg() {
  index++;
  var a=document.getElementsByClassName("abc");
  var b=document.getElementsByClassName("def");
  if(index>=a.length) index=0;
  for(var i=0;i<a.length;i++){
  a[i].style.display='none';
  b[i].style.color="#FFF";
}
  a[index].style.display='block';
  b[index].style.color="#C78A49";
}
  setInterval(ChangeImg, 2000);

  // Initialize map function
  let map;

  function initMap() {
  const position = {lat: -25.344, lng: 131.031};
  map = new google.maps.Map(document.getElementById("map"), {
  zoom: 4,
  center: position,
  mapId: "DEMO_MAP_ID",
});

  const marker = new google.maps.Marker({
  position: position,
  map: map,
  title: "Uluru",
});
}

  // Function to load Google Maps API
  (function () {
  var script = document.createElement("script");
  script.src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyD_l2Fy4YjENADcJEDy2e0CbC6lXt0TqQ0&callback=initMap";
  script.defer = true;
  script.async = true;
  document.head.appendChild(script);
})
();


  // Function to handle login button click
  function redirectToLoginPage() {
  window.location.href = 'login.php';
}

  // Function to handle page load
  window.onload = function () {
  // Initialize map
  initMap();

  // Set login button display logic
  var loggedIn = false; // Tourist or logged user
  var zxContentItems = document.querySelectorAll('.zx_content');


  if (!loggedIn) {
  zxContentItems.forEach(function(item) {
  item.classList.add('blur');
});
  document.getElementById('loginBtn').style.display = 'block';
}
};
