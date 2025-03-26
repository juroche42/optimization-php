import { Controller } from '@hotwired/stimulus';

/*
 * This is an example Stimulus controller!
 *
 * Any element with a data-controller="hello" attribute will cause
 * this controller to be executed. The name "hello" comes from the filename:
 * hello_controller.js -> "hello"
 *
 * Delete this file or adapt it for your use!
 */
export default class extends Controller {
    static targets = ["image"];
    connect() {
        this.element.textContent = 'Hello Stimulus! Edit me in assets/controllers/hello_controller.js';
        if (!this.hasImageTarget) {
            return;
        }

        if ('IntersectionObserver' in window) {
            this.observer = new IntersectionObserver(this.onIntersection.bind(this), {
                rootMargin: '200px 0px'
            });

            this.imageTargets.forEach(image => {
                this.observer.observe(image);
            });
        } else {
            this.loadImages();
        }
    }

    disconnect() {
        if (this.observer) {
            this.observer.disconnect();
        }
    }

    onIntersection(entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                this.loadImage(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }

    loadImage(image) {
        image.src = image.dataset.src;

        if (image.dataset.srcset) {
            image.srcset = image.dataset.srcset;
        }

        if (image.dataset.sizes) {
            image.sizes = image.dataset.sizes;
        }

        image.classList.remove('lazy');
    }

    loadImages() {
        this.imageTargets.forEach(image => {
            this.loadImage(image);
        });
    }
}
