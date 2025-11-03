# Contao ImageMask Bundle
🇬🇧 English (below) | 🇩🇪 Deutsch (above)


### RSCE-Inhaltselement für Bild-Masken mit SVG
*(Compatible with Contao 4.13 and 5.x)*

---

| Image                               | Mask   | Result  |
|-------------------------------------|--------|---------|
| ![Screenshot](./docs/handshake.jpg) | ![Screenshot](./docs/mask1.svg) |![Screenshot](./docs/result.png) |



## 🇩🇪 Deutsch

###  Beschreibung
Dieses Bundle stellt ein **RockSolid Custom Element (RSCE)** bereit,  
mit dem du ein **Bild mit einer SVG-Maske** kombinieren kannst.  
Die Maske kann mit dem Bild synchron skaliert werden (z. B. „100 % Breite – automatische Höhe“).  
Unterstützt **Contao 4.13** und **Contao 5.x** (Twig-Templates).

### Funktionen
* RSCE-Inhaltselement „Image with Mask | Bild mit Maske“
* Auswahl von Bild und SVG-Maske
* Option: Maske an Bildskalierung koppeln
* Aspect-Ratio / min-height / Custom CSS-Klassen
* Automatische Sprachumschaltung (DE/EN)
* Kompatibel mit Contao 4 und 5 (Twig & HTML5)


### Optional CSS
```bash
.ce_imagemask .ce-imagemask__inner {
  width: 100%;
  display: block;
  background-repeat: no-repeat;
  background-position: center;
}
```

### Logging
* Logging aktivieren: `config/packages/monolog.yaml`
* Logging-Kanal: `imagemask`
* Logging-Level: `debug`
* Logging-Datei: `var/logs/imagemask.log`
```bash
#contao 5 
$logger = \System::getContainer()->get('monolog.logger.imagemask');
$logger->debug('Debug info', ['data' => $myVar]);

#contao 4
\System::log('My debug message', __METHOD__, TL_GENERAL);
```


---

### ⚙️ Installation
```bash
composer require swoopDe/contao-imagemask-bundle
```





## 🇬🇧 English

### 🧩 Description

This bundle provides a RockSolid Custom Element (RSCE) to combine an image with an SVG mask.
The mask can be synchronized with the image scaling (e.g. “100% width — automatic height”).
Supports Contao 4.13 and Contao 5.x (Twig templates).

###
* Features
* RSCE content element “Image Mask”
* Select image and SVG mask
* Option: sync mask scale/position with the image
* Aspect ratio / min-height / custom CSS classes
* Automatic language switching (DE/EN)
* Works with Contao 4 and 5 (Twig & HTML5)

### Optional CSS
```bash
.ce_imagemask .ce-imagemask__inner {
  width: 100%;
  display: block;
  background-repeat: no-repeat;
  background-position: center;
}
```

### ⚙️ Installation
```bash
composer require swoopDe/contao-imagemask-bundle
```


---
### 📝 License
MIT License — (c) Andreas Schreck / swoop.de

---
### 🧡 Credits
Developed with love for the Contao community.
Tested with Contao 4.13 LTS and 5.6.