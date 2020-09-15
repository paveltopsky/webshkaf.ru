// создаём додекаэдр
var dodecahedronGeometry = new THREE.DodecahedronBufferGeometry(30);
var dodecahedronMaterial = new THREE.MeshBasicMaterial({
  color: 0x7777ff,
  wireframe: true,
});
var dodecahedron = new THREE.Mesh(dodecahedronGeometry, dodecahedronMaterial);
// dodecahedron.position.set(100, 100, 0);
// dodecahedron.position.x = 0;
// dodecahedron.position.y = 100;
// dodecahedron.position.z = 0;
scene.add(dodecahedron);

// создаём додекаэдр
var dodecahedronGeometry = new THREE.DodecahedronBufferGeometry(30);
var dodecahedronMaterial = new THREE.MeshBasicMaterial({
  color: 0x7777ff,
  wireframe: true,
});
var dodecahedron = new THREE.Mesh(dodecahedronGeometry, dodecahedronMaterial);
// dodecahedron.position.set(100, 100, 0);
// dodecahedron.position.x = 0;
// dodecahedron.position.y = 100;
// dodecahedron.position.z = 0;
// scene.add(dodecahedron);

var dodecahedronGeometry = new THREE.BoxBufferGeometry(40, 40, 40);
var dodecahedronMaterial = new THREE.MeshBasicMaterial({
  color: 0x000000,
  wireframe: true,
});
var dodecahedron = new THREE.Mesh(dodecahedronGeometry, dodecahedronMaterial);
// dodecahedron.position.set(100, 100, 0);
// dodecahedron.position.x = 0;
// dodecahedron.position.y = 100;
// dodecahedron.position.z = 0;
scene.add(dodecahedron);

// BACKUP

var wrap = $('#wrap');
var width = document.getElementById('wrap').offsetWidth;
var height = document.getElementById('wrap').offsetHeight;

// THREE.JS
var scene = new THREE.Scene();
var camera = new THREE.PerspectiveCamera(40, width / height, 0.1, 1500);
var renderer = new THREE.WebGLRenderer();

// устанавливаю серый цвет фона, размеры
renderer.setClearColor(0xEEEEEE, 1);
renderer.setSize(width / 1, height / 1);
wrap.append(renderer.domElement);

// controls | вращение камеры, зум
var controls = new OrbitControls( camera, renderer.domElement );
controls.maxDistance = 800;
controls.minDistance = 150;
controls.rotateSpeed = 0.6;
controls.zoomSpeed = 1;

// оси координат
var axes = new THREE.AxesHelper(150);
scene.add(axes);

// custom code >

var dodecahedronGeometry = new THREE.BoxGeometry(30, 30, 30);

var loader = new THREE.CubeTextureLoader();
loader.setPath( 'textures/' );

var textureCube = loader.load( [
  'img.jpg', 'img.jpg',
  'img.jpg', 'img.jpg',
  'img.jpg', 'img.jpg',
] );

var material = new THREE.MeshBasicMaterial( { color: 0xffffff, envMap: textureCube } );
material.needsUpdate = true;
var dodecahedronMaterial = new THREE.MeshBasicMaterial({
  color: 0x7777ff,
  // wireframe: true,
});

var dodecahedron = new THREE.Mesh(dodecahedronGeometry, material);
dodecahedron.position.set(0, 60, 0);

// scene.add(dodecahedron);

// GROUP Корпусная мебель

var geometryA = new THREE.BoxBufferGeometry(prop.width, prop.thickness, prop.depth);
var geometryB = new THREE.BoxBufferGeometry(100, 60, 2);
var geometryC = new THREE.BoxBufferGeometry(prop.thickness, prop.height - 2 * prop.thickness, prop.depth); // rack_l, rack_r
var material = new THREE.MeshBasicMaterial({
  color: 0x000000,
  wireframe: true,
});

var bottom = new THREE.Mesh(geometryA, material); // дно
var roof = new THREE.Mesh(geometryA, material);   // крыша
var rack_l = new THREE.Mesh(geometryC, material); // левая стойка
var rack_r = new THREE.Mesh(geometryC, material); // правая стойка

//create a group and add part
var group = new THREE.Group();
group.add(rack_l, rack_r, bottom, roof);
group.position.set(0, 0, 0);
scene.add(group);

function setSize() {
  group.position.set(0, -0.5 * prop.height, 0);
  // rack_l
  rack_l.position.set(-0.5 * prop.width + prop.halfThickness, 0.5 * prop.height, 0);
  rack_l.scale.z = prop.depth / prop.depthDefault;
  // rack_l.scale.y = (prop.height - 2 * prop.thickness) / (prop.heightDefault - 2 * prop.thickness);
  rack_l.scale.y = (prop.height - 2 * prop.thickness) / (prop.heightDefault - 2 * prop.thickness);
  // rack_r
  rack_r.position.set(0.5 * prop.width - prop.halfThickness, 0.5 * prop.height, 0);
  rack_r.scale.z = prop.depth / prop.depthDefault;
  rack_r.scale.y = (prop.height - 2 * prop.thickness) / (prop.heightDefault - 2 * prop.thickness);
  // bottom
  bottom.position.set(0, prop.halfThickness, 0);
  bottom.scale.x = prop.width / prop.widthDefault;
  bottom.scale.z = prop.depth / prop.depthDefault;
  // bottom
  roof.position.set(0, prop.height - prop.halfThickness, 0);
  roof.scale.x = prop.width / prop.widthDefault;
  roof.scale.z = prop.depth / prop.depthDefault;

  // отображение деталей
  if(getCheckedCheckBoxes('roof')) {
    group.add(roof);
  } else {
    group.remove(roof);
  }

  if(getCheckedCheckBoxes('bottom')) {
    group.add(bottom);
  } else {
    group.remove(bottom);
  }

  if(getCheckedCheckBoxes('rack_l')) {
    group.add(rack_l);
  } else {
    group.remove(rack_l);
  }

  if(getCheckedCheckBoxes('rack_r')) {
    group.add(rack_r);
  } else {
    group.remove(rack_r);
  }
}

function setPrice() {
  
}

// освещение
var spotLight = new THREE.SpotLight(0xffffff);
spotLight.position.set(-40, 60, -10);
scene.add(spotLight);

// параметры камеры
camera.position.set(settings.cameraX, settings.cameraY, settings.cameraZ);
camera.lookAt(scene.position);

function animate() {
  requestAnimationFrame(animate);
  setSize();
  setPrice();
  renderer.render(scene, camera);
}

animate();