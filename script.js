document.addEventListener("DOMContentLoaded", () => {

    /* ======================
       FORMULÁRIO
    ====================== */
    const form = document.querySelector("form");

    if (form) {
        form.addEventListener("submit", event => {
            event.preventDefault();
            alert("Mensagem enviada com sucesso!");
            form.submit();
        });
    }

    /* ======================
       LENTE NO TÍTULO
    ====================== */
    const titulo = document.querySelector(".titulo");
    if (!titulo) return;

    const R = 40; // ← RAIO DA LENTE (em pixels)

    titulo.addEventListener("mousemove", e => {
        const rect = titulo.getBoundingClientRect();

        // posição do mouse relativa ao título
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        titulo.classList.add("lupa-ativa");

        // aplica a máscara circular usando o raio R
        titulo.style.setProperty(
            "--mask",
            `circle(${R}px at ${x}px ${y}px)`
        );
    });

    titulo.addEventListener("mouseleave", () => {
        titulo.classList.remove("lupa-ativa");
        titulo.style.setProperty("--mask", "circle(0px at 0 0)");
    });

});
