let cachedData;

async function loadData() {
    if (!cachedData) {
        try {
            const response = await fetch('json/data.json');
            if (!response.ok) {
                throw new Error('Erreur lors du chargement des données');
            }
            cachedData = await response.json();
        } catch (error) {
            console.error(error);
        }
    }
    return cachedData;
}

const modal = document.getElementsByClassName("modal")[0];
const closeBtn = document.getElementsByClassName("close")[0];
const tableBody = document.getElementsByClassName("modalTableBody")[0];
const modalTitle = document.getElementsByClassName("modal-title")[0];

async function loadData() {
    try {
        const response = await fetch('json/data.json');
        if (!response.ok) {
            throw new Error('Erreur lors du chargement des données');
        }
        const data = await response.json();
        return data;
    } catch (error) {
        console.error(error);
    }
}

function openModal(tableData, columns, title, headers) {
    if (modal.style.display === "block") {
        return;
    }

    tableBody.innerHTML = "";
    modalTitle.innerHTML = title;

    tableData.forEach(row => {
        const tr = document.createElement("tr");
        const cells = columns.map(col => `<td>${row[col]}</td>`).join("");
        tr.innerHTML = cells;
        tableBody.appendChild(tr);
    });

    const thead = document.querySelector(".modalTable thead");
    thead.innerHTML = ""; 
    const headerRow = document.createElement("tr");
    headers.forEach(header => {
        const th = document.createElement("th");
        th.innerText = header;
        headerRow.appendChild(th);
    });
    thead.appendChild(headerRow);

    modal.style.display = "block";
}

document.getElementById("book_table").onclick = async function() {
    const data = await loadData();
    if (data && data.Part1) {
        const columns = ['annee', 'imprimes', 'numeriques'];
        const title = "Quantité de lecteur de livres imprimés et de livres numériques entre 2015 et 2023"; 
        const headers = ["Années", "Livres imprimés", "Livres numériques"];
        openModal(data.Part1, columns, title, headers);
    }
};

document.getElementById("cinema_table").onclick = async function() {
    const data = await loadData();
    if (data && data.Cinema) {
        const columns = ['annee', 'chiffreA'];
        const title = "Fréquentation dans les salles de cinema entre 2020 et 2022";
        const headers = ["Année", "Fréquentation (en millions)"];
        openModal(data.Cinema, columns, title, headers);
    }
};

document.getElementById("streaming_table").onclick = async function() {
    const data = await loadData();
    if (data && data.Streaming) {
        const columns = ['annee', 'disney', 'netflix', 'primev'];
        const title = "Fréquentation des plateformes de streaming entre 2020 et 2022";
        const headers = ["Années", "Disney", "Netflix", "Prime Vidéo"];
        openModal(data.Streaming, columns, title, headers);
    }
};

document.getElementById("musee_table").onclick = async function() {
    const data = await loadData();
    if (data && data.PartMusees) {
        const columns = ['annee', 'presentiel', 'distanciel'];
        const title = "Fréquentation des musées en présentiel et en distanciel entre 2018 et 2022";
        const headers = ["Années", "Présentiel (millions)", "Distanciel (millions)"];
        openModal(data.PartMusees, columns, title, headers);
    }
};

document.getElementById("festiv_table").onclick = async function() {
    const data = await loadData();
    if (data && data.Part4) {

        const columns = ['annee', 'presentiel', 'distanciel', 'hybride'];
        const title = "Fréquentation des festivals en présentiel, distanciel et hybride entre 2018 et 2022";
        const headers = ["Années", "Présentiel", "Distanciel", "Hybride"];

        const hybridValues = ["", "", 1000, 1000, 800];

        const mergedData = data.Part4.map((entry, index) => ({
            ...entry, 
            hybride: hybridValues[index]
        }));

        openModal(mergedData, columns, title, headers);
    }
};

document.getElementById("carte_table").onclick = async function() {
    const data = await loadData();
    if (data && data.France) {
        const columns = ['region', 'acces_limite'];
        const title = "Pourcentage de l'accès limité à internet par région";
        const headers = ["Région", "Accès limité à internet (%)"];
        openModal(data.France, columns, title, headers);
    }
};

document.getElementById("diagramme_table").onclick = async function() {
    const data = await loadData();
    if (data && data.Fracture) {
        const columns = ['tranche_age', 'acces_limite'];
        const title = "Pourcentage de l'accès limité à internet par région";
        const headers = ["Tranche d'âge", "Accès limité à internet (%)"];
        openModal(data.Fracture, columns, title, headers);
    }
};

document.getElementById("cost_table").onclick = async function() {
    const data = await loadData();
    
    if (data && data.Cost && data.Sub) {

        const chartTitle = document.querySelector("#myChartCost").getAttribute("data-current-chart");

        if (chartTitle === "platforms") {

            const columns = ['plateforme', 'pourcentage'];
            const title = "Répartition des plateformes de streaming en 2023";
            const headers = ["Plateforme", "Pourcentage (%)"];
            openModal(data.Cost, columns, title, headers);
        } else if (chartTitle === "subscriptions") {

            const columns = ['annee', 'prix_moyen'];
            const title = "Prix moyen des abonnements entre 2014 et 2024";
            const headers = ["Année", "Prix moyen (€)"];
            openModal(data.Sub, columns, title, headers);
        }
    }
};

document.getElementById("impact_table").onclick = async function() {
    const data = await loadData();

    if (data && data.Vente && data.Chiffre_Affaires) {

        const chartTitle = document.querySelector("#myChartImpact").getAttribute("data-current-chart");

        if (chartTitle === "ventes") {
            const columns = ['annee', 'ligne', 'magasin'];
            const title = "Ventes de livres en ligne vs en magasin entre 2016 et 2023";
            const headers = ["Année", "Ventes en ligne (%)", "Ventes en magasin (%)"];
            openModal(data.Vente, columns, title, headers);
        } else if (chartTitle === "chiffre_affaires") {
            const columns = ['annee', 'ca'];
            const title = "Chiffre d'affaires des librairies indépendantes entre 2016 et 2023";
            const headers = ["Année", "Chiffre d'affaires (millions d'euros)"];
            openModal(data.Chiffre_Affaires, columns, title, headers);
        }
    }
};

closeBtn.onclick = function() {
    modal.style.display = "none";
};

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
};
