document.querySelectorAll('.l1').forEach(function (elem) {
  elem.addEventListener('click', function () {
    // Ellenőrizzük, hogy van-e 'value' attribútum
    var depthValue = this.getAttribute('value');
    var depth;

    if (depthValue) {
      depth = parseInt(depthValue, 10);
    } else {
      // Ha nincs 'value' attribútum, akkor feltételezzük, hogy nulladik szintű
      depth = 0;
    }
    // console.log('Depth: ' + depth);

    if (depth === 1) {
      // Eltávolítjuk a 'show-menu' class-t a 'layer2' ID-jű elemről
      var layer2_1 = document.getElementById('layer2-1');
      var layer2_3 = document.getElementById('layer2-3');
      if (layer2_1) {
        layer2_1.classList.remove('show-menu');
      }
      if (layer2_3) {
        layer2_3.classList.remove('show-menu');
      }
    }

    if (depth === 2) {
      // Eltávolítjuk a 'show-menu' class-t a 'layer3' ID-jű elemről
      var layer3_2 = document.getElementById('layer3-2');
      if (layer3_2) {
        layer3_2.classList.remove('show-menu');
      }
    }

    if (this.classList.contains('has-children')) {
      // Hozzáadjuk a 'show-menu' class-t az aktuális elem 'ul' almenüjéhez
      var submenu = this.nextElementSibling;
      if (submenu && submenu.tagName === 'UL') {
        submenu.classList.add('show-menu');
      }

      var tag = this.getAttribute('value');
      var back_link = '#layer' + tag;
      var navLinks = document.querySelectorAll('.nav-link');
      navLinks.forEach(function (navLink) {
        navLink.setAttribute('href', back_link);
        navLink.setAttribute('value', tag);
      });
    }
  });
});

// Backlink kezelese
document.querySelectorAll('.nav-link').forEach(function (elem) {
  elem.addEventListener('click', function (e) {
    e.preventDefault();

    var val = parseInt(this.getAttribute('value'), 10);

    // Az előző szint megjelenítése és mélységének beállítása
    var prevVal = val - 1;

    // Biztosítjuk, hogy a mélység értéke ne menjen mínuszba
    if (prevVal < 0) {
      prevVal = 0;
    }

    // Frissítjük a mélységet és kiírjuk a konzolra
    // console.log('Depth: ' + prevVal);

    var prevLayer = document.querySelector('#layer' + prevVal);
    if (prevLayer) {
      prevLayer.classList.add('show-menu');
    }

    // További logika a 'nav-link' elemek frissítéséhez
    document.querySelectorAll('.nav-link').forEach(function (navLink) {
      if (parseInt(navLink.getAttribute('value'), 10) === val) {
        navLink.setAttribute('href', '#layer' + prevVal);
        navLink.setAttribute('value', prevVal.toString());
      }
    });
  });
});
