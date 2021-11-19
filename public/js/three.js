import * as THREE from 'https://unpkg.com/three/build/three.module.js';
import { OrbitControls } from 'https://cdn.skypack.dev/three/examples/jsm/controls/OrbitControls.js';
import { AsciiEffect } from 'https://cdn.skypack.dev/three/examples/jsm/effects/AsciiEffect.js';
import { TextGeometry } from 'https://cdn.skypack.dev/three/examples/jsm/geometries/TextGeometry.js';
import { FontLoader } from 'https://cdn.skypack.dev/three/examples/jsm/loaders/FontLoader.js';



const scene = new THREE.Scene;

const camara = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 1000 );

const renderer = new THREE.WebGLRenderer();
camara.position.setZ(40);
camara.position.setX(-3);


const geometry = new THREE.TorusGeometry( 10, 3, 16, 100 );
const material = new THREE.MeshStandardMaterial( { color: 0xff6437 } );
const torus = new THREE.Mesh( geometry, material);
scene.add( torus );

const pointLight = new THREE.PointLight(0xffffff);
pointLight.position.set(30, 30, 30);
const ambientLight = new THREE.AmbientLight(0xffffff);
scene.add( pointLight, ambientLight );

// const lightHelper = new THREE.PointLightHelper(pointLight);
// const gridHelper = new THREE.GridHelper(200, 50);
// scene.add( lightHelper, gridHelper );


function addStar() {
    const geometry = new THREE.SphereGeometry(0.25, 24, 24);
    const material = new THREE.MeshBasicMaterial( { color: 0xffffff } );
    const star = new THREE.Mesh( geometry, material );

    const [x, y, z] = Array(3).fill().map(() => THREE.MathUtils.randFloatSpread( 100 ));

    star.position.set(x, y, z);
    scene.add( star );
}

Array(200).fill().forEach(addStar);

const moonTexture = new THREE.TextureLoader().load('../textures/moon.jpg');
const normalTexture = new THREE.TextureLoader().load('../textures/normal.jpeg');

const moon = new THREE.Mesh(
    new THREE.SphereGeometry(3, 32, 32),
    new THREE.MeshStandardMaterial({
        map: moonTexture,
        normalMap: normalTexture
    })
);
scene.add(moon);
moon.position.z = 30;
moon.position.x = -10;

const effect = new AsciiEffect( renderer, ' .:-+*=%@#', { canvas: document.querySelector('#canvas'), invert: true } );
effect.setSize( screen.width, screen.height );
effect.domElement.style.color = 'green';
effect.domElement.style.backgroundColor = 'black';
document.body.appendChild( effect.domElement );

const controls = new OrbitControls(camara, effect.domElement);


// const text = new TextGeometry('Dit is text', {
//     font: 'arial'
// });
// document.getElementById('main').appendChild(text.domElement);

function animate() {
    requestAnimationFrame( animate );

    torus.rotation.x += 0.01;
    torus.rotation.y += 0.0005;
    torus.rotation.z += 0.001;

    moon.rotation.x += 0.01;
    moon.rotation.y += 0.0005;
    moon.rotation.z += 0.001;

    effect.render( scene, camara);
}
animate();
