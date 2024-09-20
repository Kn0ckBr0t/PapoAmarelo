gsap.from('main', {duration: 1, opacity: 0, x: "-20%", ease: "ease.out"});
gsap.from('.home_image', {duration: 20, rotation: "+=360", ease: "ease.out", repeat: -1});

document.addEventListener("DOMContentLoaded", () => {
    const dishes = [
        {
            title: "Virado a Paulista",
            description: "Um clássico da culinária paulista, o Virado à Paulista é um prato rico e saboroso que combina arroz, feijão-tropeiro, couve refogada e um delicioso bife à milanesa. Finalizado com um ovo frito, oferece uma explosão de sabores e texturas que encantam o paladar. Acompanhe com uma porção de banana frita e experimente o verdadeiro gosto de São Paulo!",
            image: "/papoamarelo/assets/images/viradopaulista.png"
        },
        {
            title: "Feijoada",
            description: "A feijoada é um prato típico brasileiro, feito com feijão preto e várias partes do porco. É frequentemente servido com arroz, couve, farofa e laranja.",
            image: "/papoamarelo/assets/images/feijoada.png"
        },
        {
            title: "Pizza",
            description: "A pizza é uma das mais populares comidas do mundo, com origens italianas. Aqui no Brasil, você pode encontrar uma variedade de sabores únicos e deliciosos.",
            image: "/papoamarelo/assets/images/pizza.png"
        }
    ];

    const titleElement = document.getElementById('dish-title');
    const descriptionElement = document.getElementById('dish-description');
    const imageElement = document.getElementById('dish-image');
    const buttons = document.querySelectorAll('.dish-button');

    function updateDish(index) {
        const dish = dishes[index];

        gsap.to([titleElement, descriptionElement, imageElement], {
            opacity: 0,
            duration: 0.5,
            onComplete: () => {
                titleElement.textContent = dish.title;
                descriptionElement.textContent = dish.description;
                imageElement.src = dish.image;

                gsap.to([titleElement, descriptionElement, imageElement], {
                    opacity: 1,
                    duration: 0.5
                });
            }
        });
    }
    buttons.forEach(button => {
        button.addEventListener('click', () => {
            const index = button.getAttribute('data-index');
            updateDish(index);
        });
    });
    updateDish(0);
});
const items = document.querySelectorAll('.carousel-item');
const prevButton = document.querySelector('.prev');
const nextButton = document.querySelector('.next');

let currentIndex = 0;

function updateCarousel() {
    items.forEach((item, index) => {
        item.classList.remove('active');
        if (index === currentIndex) {
            item.classList.add('active');
        }
    });
    const offset = -currentIndex * 100;
    document.querySelector('.carousel').style.transform = `translateX(${offset}%)`;
}

prevButton.addEventListener('click', () => {
    currentIndex = (currentIndex > 0) ? currentIndex - 1 : items.length - 1;
    updateCarousel();
});

nextButton.addEventListener('click', () => {
    currentIndex = (currentIndex < items.length - 1) ? currentIndex + 1 : 0;
    updateCarousel();
});

updateCarousel();