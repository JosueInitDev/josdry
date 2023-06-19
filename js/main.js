
// ----mountain----
if (document.getElementById('mountain')!==null){
    const mountainLeft = document.querySelector('#mountain_left');
    const mountainRight = document.querySelector('#mountain_right');
    const cloud1 = document.querySelector('#clouds_1');
    const cloud2 = document.querySelector('#clouds_2');
    const man = document.querySelector('#man');
    let mountainTop=1000;
    const startActionsFromTopPx=240

    window.addEventListener('scroll',()=>{
        mountainTop = document.getElementById('mountain').getBoundingClientRect()
        const value = mountainTop.top;
        if (value<=startActionsFromTopPx){
            mountainLeft.style.left = `${(value-startActionsFromTopPx)/0.7}px`
            cloud2.style.left = `${value*2}px`
            mountainRight.style.left = `${(startActionsFromTopPx-value)/0.7}px`
            cloud1.style.left = `${value*2}px`
            man.style.height = `${window.innerHeight - value}px`
        }
    })
}
// ----//mountain----

// ----music----
if (document.getElementById('play-pause')!==null){
    const buttons = Array.from(document.querySelectorAll("#play-pause"));

    buttons.forEach(btn => {
        btn.addEventListener("click", () => {
            btn.classList.toggle("active");
        });
    });

    $('#play-pause').click( function() {
        $(".bigPlay img").toggleClass("active");
    } );

    const audio = document.querySelector('#audio');
    let isPlay = false;

    const allCibik = document.querySelectorAll('.lines.grey');
    let index = 0;
    let animation;

    const bigButton = document.querySelector('.bigPlay');
    bigButton.addEventListener('click', () => {
        if (!isPlay) {
            isPlay = true;
            audio.play();
            animation = setInterval(() => {
            allCibik[index].classList.remove('grey');
            index = index + 1;
        }, 1000);
        } else {
            isPlay = false;
            audio.pause();
            clearInterval(animation);
        }
    });
}
// ----//music----

// ----itsnow----
if (document.querySelector('.itsnow')!==null){
    const preload = () => {
        let manager = new THREE.LoadingManager();
        manager.onLoad = function() { 
            const environment = new Environment( typo, particle );
        }
        var typo = null;
        const loader = new THREE.FontLoader( manager );
        const font = loader.load('https://res.cloudinary.com/dydre7amr/raw/upload/v1612950355/font_zsd4dr.json', function ( font ) { typo = font; });
        const particle = new THREE.TextureLoader( manager ).load( 'img/particle_a64uzf.png');
    }

    if ( document.readyState === "complete" || (document.readyState !== "loading" && !document.documentElement.doScroll))
        preload ();
    else
        document.addEventListener("DOMContentLoaded", preload ); 
    
    class Environment {  
        constructor( font, particle ){ 
            this.font = font;
            this.particle = particle;
            this.container = document.querySelector( '#magic' );
            this.scene = new THREE.Scene();
            this.createCamera();
            this.createRenderer();
            this.setup()
            this.bindEvents();
        }
    
        bindEvents(){
            window.addEventListener( 'resize', this.onWindowResize.bind( this ));    
        }
    
        setup(){ 
            this.createParticles = new CreateParticles( this.scene, this.font,             this.particle, this.camera, this.renderer );
        }

        render() {      
            this.createParticles.render()
            this.renderer.render( this.scene, this.camera )
            this.renderer.setClearColor( 0x07151a, 1 );
        }

        createCamera() {  
            this.camera = new THREE.PerspectiveCamera( 65, this.container.clientWidth /  this.container.clientHeight, 1, 10000 );
            this.camera.position.set( 0,0, 100 );
        }
    
        createRenderer() {
            this.renderer = new THREE.WebGLRenderer();
            this.renderer.setSize( this.container.clientWidth, this.container.clientHeight );

            this.renderer.setPixelRatio( Math.min( window.devicePixelRatio, 2));
    
            this.renderer.outputEncoding = THREE.sRGBEncoding;
            this.container.appendChild( this.renderer.domElement );
        
            this.renderer.setAnimationLoop(() => { this.render() })
        }
    
        onWindowResize(){
            this.camera.aspect = this.container.clientWidth / this.container.clientHeight;
            this.camera.updateProjectionMatrix();
            this.renderer.setSize( this.container.clientWidth, this.container.clientHeight );
        }
    }
    
    class CreateParticles {      
        constructor( scene, font, particleImg, camera, renderer ) {
            this.scene = scene;
            this.font = font;
            this.particleImg = particleImg;
            this.camera = camera;
            this.renderer = renderer;
            
            this.raycaster = new THREE.Raycaster();
            this.mouse = new THREE.Vector2(-200, 200);
            
            this.colorChange = new THREE.Color();

            this.buttom = false;

            this.data = {  
                text: 'DONNE VIE\nAU PROJET',
                amount: 1500,
                particleSize: 1,
                particleColor: 0xffffff,
                textSize: 16,
                area: 250,
                ease: .05,
            }
    
            this.setup();
            this.bindEvents();
        }

        setup(){  
            const geometry = new THREE.PlaneGeometry( this.visibleWidthAtZDepth( 100, this.camera ), this.visibleHeightAtZDepth( 100, this.camera ));
            const material = new THREE.MeshBasicMaterial( { color: 0x00ff00, transparent: true } );
            this.planeArea = new THREE.Mesh( geometry, material );
            this.planeArea.visible = false;
            this.createText();
        }
    
        bindEvents() {
            document.addEventListener( 'mousedown', this.onMouseDown.bind( this ));
            document.addEventListener( 'mousemove', this.onMouseMove.bind( this ));
            document.addEventListener( 'mouseup', this.onMouseUp.bind( this ));
        }
    
        onMouseDown(){      
            this.mouse.x = ( event.clientX / window.innerWidth ) * 2 - 1;
            this.mouse.y = - ( event.clientY / window.innerHeight ) * 2 + 1;

            const vector = new THREE.Vector3( this.mouse.x, this.mouse.y, 0.5);
            vector.unproject( this.camera );
            const dir = vector.sub( this.camera.position ).normalize();
            const distance = - this.camera.position.z / dir.z;
            this.currenPosition = this.camera.position.clone().add( dir.multiplyScalar( distance ) );
            
            const pos = this.particles.geometry.attributes.position;
            this.buttom = true;
            this.data.ease = .01;
        }
    
        onMouseUp(){
            this.buttom = false;
            this.data.ease = .05;
        }
    
        onMouseMove( ) { 
            this.mouse.x = ( event.clientX / window.innerWidth ) * 2 - 1;
            this.mouse.y = - ( event.clientY / window.innerHeight ) * 2 + 1;
        }
        
        render( level ){ 
            const time = ((.001 * performance.now())%12)/12;
            const zigzagTime = (1 + (Math.sin( time * 2 * Math.PI )))/6;

            this.raycaster.setFromCamera( this.mouse, this.camera );

            const intersects = this.raycaster.intersectObject( this.planeArea );

            if ( intersects.length > 0 ) {  
                const pos = this.particles.geometry.attributes.position;
                const copy = this.geometryCopy.attributes.position;
                const coulors = this.particles.geometry.attributes.customColor;
                const size = this.particles.geometry.attributes.size;

                const mx = intersects[ 0 ].point.x;
                const my = intersects[ 0 ].point.y;
                const mz = intersects[ 0 ].point.z;

                for ( var i = 0, l = pos.count; i < l; i++) {  
                    const initX = copy.getX(i);
                    const initY = copy.getY(i);
                    const initZ = copy.getZ(i);

                    let px = pos.getX(i);
                    let py = pos.getY(i);
                    let pz = pos.getZ(i);

                    this.colorChange.setHSL( .5, 1 , 1 )
                    coulors.setXYZ( i, this.colorChange.r, this.colorChange.g, this.colorChange.b )
                    coulors.needsUpdate = true;

                    size.array[ i ]  = this.data.particleSize;
                    size.needsUpdate = true;

                    let dx = mx - px;
                    let dy = my - py;
                    const dz = mz - pz;

                    const mouseDistance = this.distance( mx, my, px, py )
                    let d = ( dx = mx - px ) * dx + ( dy = my - py ) * dy;
                    const f = - this.data.area/d;

                    if( this.buttom ){   
                        const t = Math.atan2( dy, dx );
                        px -= f * Math.cos( t );
                        py -= f * Math.sin( t );

                        this.colorChange.setHSL( .5 + zigzagTime, 1.0 , .5 )
                        coulors.setXYZ( i, this.colorChange.r, this.colorChange.g, this.colorChange.b )
                        coulors.needsUpdate = true;

                        if ((px > (initX + 70)) || ( px < (initX - 70)) || (py > (initY + 70) || ( py < (initY - 70)))){  
                            this.colorChange.setHSL( .15, 1.0 , .5 )
                            coulors.setXYZ( i, this.colorChange.r, this.colorChange.g, this.colorChange.b )
                            coulors.needsUpdate = true;
                        }
                    }else{
                        if( mouseDistance < this.data.area ){
                            if(i%5==0){
                                const t = Math.atan2( dy, dx );
                                px -= .03 * Math.cos( t );
                                py -= .03 * Math.sin( t );

                                this.colorChange.setHSL( .15 , 1.0 , .5 )
                                coulors.setXYZ( i, this.colorChange.r, this.colorChange.g, this.colorChange.b )
                                coulors.needsUpdate = true;

                                size.array[ i ]  =  this.data.particleSize /1.2;
                                size.needsUpdate = true;
                            }else{
                                const t = Math.atan2( dy, dx );
                                px += f * Math.cos( t );
                                py += f * Math.sin( t );

                                pos.setXYZ( i, px, py, pz );
                                pos.needsUpdate = true;

                                size.array[ i ]  = this.data.particleSize * 1.3 ;
                                size.needsUpdate = true;
                            }

                            if ((px > (initX + 10)) || ( px < (initX - 10)) || (py > (initY + 10) || ( py < (initY - 10)))){
                                this.colorChange.setHSL( .15, 1.0 , .5 )
                                coulors.setXYZ( i, this.colorChange.r, this.colorChange.g, this.colorChange.b )
                                coulors.needsUpdate = true;

                                size.array[ i ]  = this.data.particleSize /1.8;
                                size.needsUpdate = true;
                            }
                        }
    
                    }
    
                    px += ( initX  - px ) * this.data.ease;
                    py += ( initY  - py ) * this.data.ease;
                    pz += ( initZ  - pz ) * this.data.ease;
    
                    pos.setXYZ( i, px, py, pz );
                    pos.needsUpdate = true;
                }
            }
        }
    
        createText(){ 
            let thePoints = [];

            let shapes = this.font.generateShapes( this.data.text , this.data.textSize  );
            let geometry = new THREE.ShapeGeometry( shapes );
            geometry.computeBoundingBox();
        
            const xMid = - 0.5 * ( geometry.boundingBox.max.x - geometry.boundingBox.min.x );
            const yMid =  (geometry.boundingBox.max.y - geometry.boundingBox.min.y)/2.85;

            geometry.center();

            let holeShapes = [];

            for ( let q = 0; q < shapes.length; q ++ ) {
                let shape = shapes[ q ];
    
                if ( shape.holes && shape.holes.length > 0 ) {
                    for ( let  j = 0; j < shape.holes.length; j ++ ) {
                        let  hole = shape.holes[ j ];
                        holeShapes.push( hole );
                    }
                }
            }
            shapes.push.apply( shapes, holeShapes );
    
            let colors = [];
            let sizes = [];
                        
            for ( let  x = 0; x < shapes.length; x ++ ) {
                let shape = shapes[ x ];
    
                const amountPoints = ( shape.type == 'Path') ? this.data.amount/2 : this.data.amount;

                let points = shape.getSpacedPoints( amountPoints ) ;

                points.forEach( ( element, z ) => {
                    const a = new THREE.Vector3( element.x, element.y, 0 );
                    thePoints.push( a );
                    colors.push( this.colorChange.r, this.colorChange.g, this.colorChange.b);
                    sizes.push( 1 )
                });
            }

            let geoParticles = new THREE.BufferGeometry().setFromPoints( thePoints );
            geoParticles.translate( xMid, yMid, 0 );
                    
            geoParticles.setAttribute( 'customColor', new THREE.Float32BufferAttribute( colors, 3 ) );
            geoParticles.setAttribute( 'size', new THREE.Float32BufferAttribute( sizes, 1) );

            const material = new THREE.ShaderMaterial( {
                uniforms: {
                    color: { value: new THREE.Color( 0xffffff ) },
                    pointTexture: { value: this.particleImg }
                },
                vertexShader: document.getElementById( 'vertexshader' ).textContent,
                fragmentShader: document.getElementById( 'fragmentshader' ).textContent,

                blending: THREE.AdditiveBlending,
                depthTest: false,
                transparent: true,
            });
    
            this.particles = new THREE.Points( geoParticles, material );
            this.scene.add( this.particles );

            this.geometryCopy = new THREE.BufferGeometry();
            this.geometryCopy.copy( this.particles.geometry );   
        }
    
        visibleHeightAtZDepth ( depth, camera ) {
            const cameraOffset = camera.position.z;
            if ( depth < cameraOffset ) depth -= cameraOffset;
            else depth += cameraOffset;
    
            const vFOV = camera.fov * Math.PI / 180; 
    
            return 2 * Math.tan( vFOV / 2 ) * Math.abs( depth );
        }
    
        visibleWidthAtZDepth( depth, camera ) {
            const height = this.visibleHeightAtZDepth( depth, camera );
            return height * camera.aspect;
        }
    
        distance (x1, y1, x2, y2){     
            return Math.sqrt(Math.pow((x1 - x2), 2) + Math.pow((y1 - y2), 2));
        }
    }
}
// ----//itsnow----


// ----photosStyled----
if (document.querySelector('.photosStyled')!==null){
    var radius = 240; // how big of the radius
    var autoRotate = true; // auto rotate or not
    var rotateSpeed = -60; // unit: seconds/360 degrees
    var imgWidth = 120; // width of images (unit: px)
    var imgHeight = 170; // height of images (unit: px)

    // Link of background music - set 'null' if you dont want to play background music
    var bgMusicURL = 'https://api.soundcloud.com/tracks/143041228/stream?client_id=587aa2d384f7333a886010d5f52f302a';
    var bgMusicControls = true; // Show UI music control

    // ===================== start =======================
    // animation start after 1000 miliseconds
    setTimeout(init, 1000);

    let odrag = document.getElementById('drag-container');
    let ospin = document.getElementById('spin-container');
    let aImg = ospin.querySelectorAll('.imgStyled');
    let aEle = [...aImg]; // combine 2 arrays

    // Size of images
    ospin.style.width = imgWidth + "px";
    ospin.style.height = imgHeight + "px";

    // Size of ground - depend on radius
    var ground = document.getElementById('ground');
    ground.style.width = radius * 3 + "px";
    ground.style.height = radius * 3 + "px";

    function init(delayTime) {
        for (var i = 0; i < aEle.length; i++) {
            aEle[i].style.transform = "rotateY(" + (i * (360 / aEle.length)) + "deg) translateZ(" + radius + "px)";
            aEle[i].style.transition = "transform 1s";
            aEle[i].style.transitionDelay = delayTime || (aEle.length - i) / 4 + "s";
        }
    }

    function applyTranform(obj) {
        // Constrain the angle of camera (between 0 and 180)
        if(tY > 180) tY = 180;
        if(tY < 0) tY = 0;

        // Apply the angle
        obj.style.transform = "rotateX(" + (-tY) + "deg) rotateY(" + (tX) + "deg)";
    }

    function playSpin(yes) {
        ospin.style.animationPlayState = (yes?'running':'paused');
    }

    var sX, sY, nX, nY, desX = 0,
        desY = 0,
        tX = 0,
        tY = 10;

    // auto spin
    if (autoRotate) {
        var animationName = (rotateSpeed > 0 ? 'spin' : 'spinRevert');
        ospin.style.animation = `${animationName} ${Math.abs(rotateSpeed)}s infinite linear`;
    }

    // setup events
    document.onpointerdown = function (e) {
        clearInterval(odrag.timer);
        e = e || window.event;
        var sX = e.clientX,
            sY = e.clientY;

        this.onpointermove = function (e) {
            e = e || window.event;
            var nX = e.clientX,
                nY = e.clientY;
            desX = nX - sX;
            desY = nY - sY;
            tX += desX * 0.1;
            tY += desY * 0.1;
            applyTranform(odrag);
            sX = nX;
            sY = nY;
        };

        this.onpointerup = function (e) {
            odrag.timer = setInterval(function () {
                desX *= 0.95;
                desY *= 0.95;
                tX += desX * 0.1;
                tY += desY * 0.1;
                applyTranform(odrag);
                playSpin(false);
                if (Math.abs(desX) < 0.5 && Math.abs(desY) < 0.5) {
                    clearInterval(odrag.timer);
                    playSpin(true);
                }
            }, 17);
            this.onpointermove = this.onpointerup = null;
        };

        return false;
    };
}
// ----//photosStyled----


// ----particles-foreground----
if (document.getElementById('particles-foreground')!==null){
    !function(a,b){"use strict";function c(a){a=a||{};for(var b=1;b<arguments.length;b++){var c=arguments[b];if(c)for(var d in c)c.hasOwnProperty(d)&&("object"==typeof c[d]?deepExtend(a[d],c[d]):a[d]=c[d])}return a}function d(d,g){function h(){if(y){r=b.createElement("canvas"),r.className="pg-canvas",r.style.display="block",d.insertBefore(r,d.firstChild),s=r.getContext("2d"),i();for(var c=Math.round(r.width*r.height/g.density),e=0;c>e;e++){var f=new n;f.setStackPos(e),z.push(f)}a.addEventListener("resize",function(){k()},!1),b.addEventListener("mousemove",function(a){A=a.pageX,B=a.pageY},!1),D&&!C&&a.addEventListener("deviceorientation",function(){F=Math.min(Math.max(-event.beta,-30),30),E=Math.min(Math.max(-event.gamma,-30),30)},!0),j(),q("onInit")}}function i(){r.width=d.offsetWidth,r.height=d.offsetHeight,s.fillStyle=g.dotColor,s.strokeStyle=g.lineColor,s.lineWidth=g.lineWidth}function j(){if(y){u=a.innerWidth,v=a.innerHeight,s.clearRect(0,0,r.width,r.height);for(var b=0;b<z.length;b++)z[b].updatePosition();for(var b=0;b<z.length;b++)z[b].draw();G||(t=requestAnimationFrame(j))}}function k(){i();for(var a=d.offsetWidth,b=d.offsetHeight,c=z.length-1;c>=0;c--)(z[c].position.x>a||z[c].position.y>b)&&z.splice(c,1);var e=Math.round(r.width*r.height/g.density);if(e>z.length)for(;e>z.length;){var f=new n;z.push(f)}else e<z.length&&z.splice(e);for(c=z.length-1;c>=0;c--)z[c].setStackPos(c)}function l(){G=!0}function m(){G=!1,j()}function n(){switch(this.stackPos,this.active=!0,this.layer=Math.ceil(3*Math.random()),this.parallaxOffsetX=0,this.parallaxOffsetY=0,this.position={x:Math.ceil(Math.random()*r.width),y:Math.ceil(Math.random()*r.height)},this.speed={},g.directionX){case"left":this.speed.x=+(-g.maxSpeedX+Math.random()*g.maxSpeedX-g.minSpeedX).toFixed(2);break;case"right":this.speed.x=+(Math.random()*g.maxSpeedX+g.minSpeedX).toFixed(2);break;default:this.speed.x=+(-g.maxSpeedX/2+Math.random()*g.maxSpeedX).toFixed(2),this.speed.x+=this.speed.x>0?g.minSpeedX:-g.minSpeedX}switch(g.directionY){case"up":this.speed.y=+(-g.maxSpeedY+Math.random()*g.maxSpeedY-g.minSpeedY).toFixed(2);break;case"down":this.speed.y=+(Math.random()*g.maxSpeedY+g.minSpeedY).toFixed(2);break;default:this.speed.y=+(-g.maxSpeedY/2+Math.random()*g.maxSpeedY).toFixed(2),this.speed.x+=this.speed.y>0?g.minSpeedY:-g.minSpeedY}}function o(a,b){return b?void(g[a]=b):g[a]}function p(){console.log("destroy"),r.parentNode.removeChild(r),q("onDestroy"),f&&f(d).removeData("plugin_"+e)}function q(a){void 0!==g[a]&&g[a].call(d)}var r,s,t,u,v,w,x,y=!!b.createElement("canvas").getContext,z=[],A=0,B=0,C=!navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry|BB10|mobi|tablet|opera mini|nexus 7)/i),D=!!a.DeviceOrientationEvent,E=0,F=0,G=!1;return g=c({},a[e].defaults,g),n.prototype.draw=function(){s.beginPath(),s.arc(this.position.x+this.parallaxOffsetX,this.position.y+this.parallaxOffsetY,g.particleRadius/2,0,2*Math.PI,!0),s.closePath(),s.fill(),s.beginPath();for(var a=z.length-1;a>this.stackPos;a--){var b=z[a],c=this.position.x-b.position.x,d=this.position.y-b.position.y,e=Math.sqrt(c*c+d*d).toFixed(2);e<g.proximity&&(s.moveTo(this.position.x+this.parallaxOffsetX,this.position.y+this.parallaxOffsetY),g.curvedLines?s.quadraticCurveTo(Math.max(b.position.x,b.position.x),Math.min(b.position.y,b.position.y),b.position.x+b.parallaxOffsetX,b.position.y+b.parallaxOffsetY):s.lineTo(b.position.x+b.parallaxOffsetX,b.position.y+b.parallaxOffsetY))}s.stroke(),s.closePath()},n.prototype.updatePosition=function(){if(g.parallax){if(D&&!C){var a=(u-0)/60;w=(E- -30)*a+0;var b=(v-0)/60;x=(F- -30)*b+0}else w=A,x=B;this.parallaxTargX=(w-u/2)/(g.parallaxMultiplier*this.layer),this.parallaxOffsetX+=(this.parallaxTargX-this.parallaxOffsetX)/10,this.parallaxTargY=(x-v/2)/(g.parallaxMultiplier*this.layer),this.parallaxOffsetY+=(this.parallaxTargY-this.parallaxOffsetY)/10}var c=d.offsetWidth,e=d.offsetHeight;switch(g.directionX){case"left":this.position.x+this.speed.x+this.parallaxOffsetX<0&&(this.position.x=c-this.parallaxOffsetX);break;case"right":this.position.x+this.speed.x+this.parallaxOffsetX>c&&(this.position.x=0-this.parallaxOffsetX);break;default:(this.position.x+this.speed.x+this.parallaxOffsetX>c||this.position.x+this.speed.x+this.parallaxOffsetX<0)&&(this.speed.x=-this.speed.x)}switch(g.directionY){case"up":this.position.y+this.speed.y+this.parallaxOffsetY<0&&(this.position.y=e-this.parallaxOffsetY);break;case"down":this.position.y+this.speed.y+this.parallaxOffsetY>e&&(this.position.y=0-this.parallaxOffsetY);break;default:(this.position.y+this.speed.y+this.parallaxOffsetY>e||this.position.y+this.speed.y+this.parallaxOffsetY<0)&&(this.speed.y=-this.speed.y)}this.position.x+=this.speed.x,this.position.y+=this.speed.y},n.prototype.setStackPos=function(a){this.stackPos=a},h(),{option:o,destroy:p,start:m,pause:l}}var e="particleground",f=a.jQuery;a[e]=function(a,b){return new d(a,b)},a[e].defaults={minSpeedX:.1,maxSpeedX:.7,minSpeedY:.1,maxSpeedY:.7,directionX:"center",directionY:"center",density:1e4,dotColor:"#666666",lineColor:"#666666",particleRadius:7,lineWidth:1,curvedLines:!1,proximity:100,parallax:!0,parallaxMultiplier:5,onInit:function(){},onDestroy:function(){}},f&&(f.fn[e]=function(a){if("string"==typeof arguments[0]){var b,c=arguments[0],g=Array.prototype.slice.call(arguments,1);return this.each(function(){f.data(this,"plugin_"+e)&&"function"==typeof f.data(this,"plugin_"+e)[c]&&(b=f.data(this,"plugin_"+e)[c].apply(this,g))}),void 0!==b?b:this}return"object"!=typeof a&&a?void 0:this.each(function(){f.data(this,"plugin_"+e)||f.data(this,"plugin_"+e,new d(this,a))})})}(window,document),/**
    * requestAnimationFrame polyfill by Erik Möller. fixes from Paul Irish and Tino Zijdel
    * @see: http://paulirish.com/2011/requestanimationframe-for-smart-animating/
    * @see: http://my.opera.com/emoller/blog/2011/12/20/requestanimationframe-for-smart-er-animating
    * @license: MIT license
    */
    function(){for(var a=0,b=["ms","moz","webkit","o"],c=0;c<b.length&&!window.requestAnimationFrame;++c)window.requestAnimationFrame=window[b[c]+"RequestAnimationFrame"],window.cancelAnimationFrame=window[b[c]+"CancelAnimationFrame"]||window[b[c]+"CancelRequestAnimationFrame"];window.requestAnimationFrame||(window.requestAnimationFrame=function(b){var c=(new Date).getTime(),d=Math.max(0,16-(c-a)),e=window.setTimeout(function(){b(c+d)},d);return a=c+d,e}),window.cancelAnimationFrame||(window.cancelAnimationFrame=function(a){clearTimeout(a)})}();

    particleground(document.getElementById('particles-foreground'), {
        dotColor: 'rgba(255, 255, 255, 1)',
        lineColor: 'rgba(255, 255, 255, 0.05)',
        minSpeedX: 0.3,
        maxSpeedX: 0.6,
        minSpeedY: 0.3,
        maxSpeedY: 0.6,
        density: 50000, // One particle every n pixels
        curvedLines: false,
        proximity: 250, // How close two dots need to be before they join
        parallaxMultiplier: 10, // Lower the number is more extreme parallax
        particleRadius: 4, // Dot size
    });
}
// ----//particles-foreground----