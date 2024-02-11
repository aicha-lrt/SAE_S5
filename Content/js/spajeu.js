$(document).ready(function () {
  "use strict";
  $(".preloader").fadeOut();
  // Show modal
  $("#bs-example-modal-lg").modal("show");

  $("#response-form").on("submit", function (event) {
    event.preventDefault();
    // Ajouter un appel au back avec de l'ajax pour récuperer la bonne réponse puis la comparé avec "$("#response").first().val()"
    const reponse = "Rachel";
    if ($("#response").first().val() === reponse) {
      $("#al-success-alert").modal("show");
    } else {
      $("#al-danger-alert").modal("show");
    }
  });

  // Pixi JS
  const speed = 5;
  const min_distance = 70;
  const app = new PIXI.Application({
    width: 1000,
    height: 500,
    backgroundColor: 0x8d8b8e,
  });
  PIXI.loader.add("background", "Content/img/spatialisationjeu/paysage.png");

  document.body.appendChild(app.view);

  const container = new PIXI.Container();
  app.stage.addChild(container);
  PIXI.Loader.shared.load(setup);

  function setupAnimatedCharacter() {
    const frames = [];
    for (let i = 1; i < 29; i++) {
      frames.push(
        PIXI.Texture.from(
          `Content/img/spatialisationjeu/sprites/sprite-${i}.png`
        )
      );
    }

    const animations = {
      up: frames.slice(2, 7),
      down: frames.slice(8, 14),
      left: frames.slice(15, 21),
      right: frames.slice(22, 28),
    };

    const character = new PIXI.AnimatedSprite(animations.up);
    character.anchor.set(0.5);
    character.animationSpeed = 0.1;
    character.loop = true;
    character.x = app.screen.width / 2;
    character.y = app.screen.height / 2;

    return { character, animations };
  }

  function setupObject(image, width, height, x, y) {
    const texture = PIXI.Texture.from(image);

    // Create a sprite using the texture
    const sprite = new PIXI.Sprite(texture);
    // Set the position of the sprite

    sprite.y = y;
    sprite.width = width;
    sprite.height = height;
    sprite.x = x ?? app.screen.width - sprite.width - 70;

    return sprite;
  }

  function distanceBetweenTwoPoints(sprite1, sprite2) {
    const bounds1 = sprite1.getBounds();
    const bounds2 = sprite2.getBounds();

    const center1 = new PIXI.Point(
      bounds1.x + bounds1.width / 2,
      bounds1.y + bounds1.height / 2
    );
    const center2 = new PIXI.Point(
      bounds2.x + bounds2.width / 2,
      bounds2.y + bounds2.height / 2
    );

    // Calculate distance between centers of the bounds
    const distance = Math.sqrt(
      Math.pow(center2.x - center1.x, 2) + Math.pow(center2.y - center1.y, 2)
    );

    return distance;
  }

  function dialog() {
    // Create a container for the dialog
    const dialogContainer = new PIXI.Container();

    // Create a background for the dialog
    const dialogBackground = new PIXI.Graphics();
    dialogBackground.beginFill(0x000000, 0.7);
    dialogBackground.drawRect(0, 0, 500, 150);
    dialogBackground.endFill();
    dialogContainer.addChild(dialogBackground);

    // Create text for the dialog
    const dialogText = new PIXI.Text("Hello, this is a dialog!", {
      fontSize: 20,
      fill: 0xffffff,
      wordWrap: true,
      wordWrapWidth: 280,
    });
    dialogText.position.set(
      (dialogContainer.width - dialogText.width) / 2,
      (dialogContainer.height - dialogText.height) / 2
    );
    dialogContainer.addChild(dialogText);

    // Center the dialog on the screen
    dialogContainer.position.set(
      (app.screen.width - dialogContainer.width) / 2,
      (app.screen.height - dialogContainer.height) / 2
    );

    // Event listener to close the dialog on click
    dialogContainer.interactive = true;
    dialogContainer.visible = false;
    dialogContainer.on("pointerdown", () => {
      dialogContainer.visible = false;
    });

    return { dialogContainer, dialogText };
  }

  function setup() {
    const background = new PIXI.Sprite(
      PIXI.loader.resources.background.texture
    );
    // Set the sprite's size to match the application's size
    background.width = app.screen.width;
    background.height = app.screen.height;

    const { character, animations } = setupAnimatedCharacter();
    const { dialogContainer, dialogText } = dialog();
    const indice_couteau = setupObject(
      "Content/img/spatialisationjeu/indice_images/couteau.png",
      60,
      60,
      null,
      400
    );
    const indice_lettre = setupObject(
      "Content/img/spatialisationjeu/indice_images/lettre.png",
      60,
      60,
      200,
      100
    );
    const indice_radioactive = setupObject(
      "Content/img/spatialisationjeu/indice_images/radioactive.png",
      60,
      60,
      30,
      350
    );

    function getMessageIndice(minDistance) {
      const distance_indice_couteau = distanceBetweenTwoPoints(
        character,
        indice_couteau
      );

      if (distance_indice_couteau <= minDistance) {
        return "Indice 1: Lien de famille";
      }

      const distance_indice_radioactive = distanceBetweenTwoPoints(
        character,
        indice_radioactive
      );

      if (distance_indice_radioactive <= minDistance) {
        return "Indice 2: Est contenu dans";
      }

      const distance_indice_lettre = distanceBetweenTwoPoints(
        character,
        indice_lettre
      );

      if (distance_indice_lettre <= minDistance) {
        return "Indice 3: Rac";
      }
    }
    const keys = {};

    window.addEventListener("keydown", (e) => {
      keys[e.code] = true;
    });

    window.addEventListener("keyup", (e) => {
      keys[e.code] = false;
      character.stop();
    });

    let lastPosition = null;

    app.ticker.add(() => {
      if (keys["ArrowLeft"] && character.x - speed > 0) {
        const message = getMessageIndice(min_distance);
        if (!message || lastPosition !== animations.left) {
          if (!character.playing) {
            const currentPosition = character.currentFrame;
            character.textures = animations.left;
            character.gotoAndPlay(currentPosition + 1);
          }

          character.x -= speed;
          lastPosition = animations.left;
          dialogContainer.visible = false;
        } else {
          dialogContainer.visible = true;
          dialogText.text = message ?? "";
        }
      }

      if (keys["ArrowRight"] && character.x + speed < app.screen.width) {
        const message = getMessageIndice(min_distance);
        if (!message || lastPosition !== animations.right) {
          if (!character.playing) {
            const currentPosition = character.currentFrame;
            character.textures = animations.right;
            character.gotoAndPlay(currentPosition + 1);
            lastPosition = animations.right;
          }

          character.x += speed;
          dialogContainer.visible = false;
        } else {
          dialogContainer.visible = true;
          dialogText.text = message ?? "";
        }
      }

      if (keys["ArrowUp"] && character.y - speed > 0) {
        const message = getMessageIndice(min_distance);

        if (!message || lastPosition !== animations.up) {
          if (!character.playing) {
            const currentPosition = character.currentFrame;
            character.textures = animations.up;
            character.gotoAndPlay(currentPosition + 1);
            lastPosition = animations.up;
          }
          character.y -= speed;
          dialogContainer.visible = false;
        } else {
          dialogContainer.visible = true;
          dialogText.text = message ?? "";
        }
      }

      if (keys["ArrowDown"] && character.y + speed < app.screen.height) {
        const message = getMessageIndice(min_distance);

        if (!message || lastPosition !== animations.down) {
          if (!character.playing) {
            const currentPosition = character.currentFrame;
            character.textures = animations.down;
            character.gotoAndPlay(currentPosition + 1);
            lastPosition = animations.down;
          }
          character.y += speed;
          dialogContainer.visible = false;
        } else {
          dialogContainer.visible = true;
          dialogText.text = message ?? "";
        }
      }
    });

    container.addChild(background);
    container.addChild(indice_couteau);
    container.addChild(indice_lettre);
    container.addChild(indice_radioactive);
    container.addChild(character);
    container.addChild(dialogContainer);
  }
});
