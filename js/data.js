let currentChartLivres = 'line';

function createChart(chartType, dataJson) {

    const annees = dataJson.Part1.map(entry => entry.annee);
    const livresImprimes = dataJson.Part1.map(entry => entry.imprimes);
    const livresNumeriques = dataJson.Part1.map(entry => entry.numeriques);

    if (window.chartLivres) {
        window.chartLivres.destroy();
    }

    window.chartLivres = new Chart(
        document.getElementById('myChartLivres'),
        {
            type: chartType, 
            data: {
                labels: annees,  
                datasets: [
                    {
                        label: 'Livres Imprimés',
                        backgroundColor: 'rgb(255, 99, 132)',
                        borderColor: 'rgb(255, 99, 132)',
                        data: livresImprimes, 
                        fill: false,
                        barPercentage: chartType === 'bar' ? 0.9 : undefined 
                    },
                    {
                        label: 'Livres Numériques',
                        backgroundColor: 'rgb(54, 162, 235)',
                        borderColor: 'rgb(54, 162, 235)',
                        data: livresNumeriques, 
                        fill: false,
                        barPercentage: chartType === 'bar' ? 0.9 : undefined
                    }
                ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Pourcentage (%)',
                            color: '#55423D',
                            font: {
                                size: 14,
                                family: 'Montserrat'
                            }
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Années',
                            color: '#55423D',
                            font: {
                                size: 14,
                                family: 'Montserrat'
                            }
                        }
                    }
                },
                plugins: {
                    title: {
                        display: true,
                        text: chartType === 'line' 
                            ? 'Évolution des lecteurs de livres imprimés et numériques entre 2015 et 2023' 
                            : 'Évolution des lecteurs de livres imprimés et numériques entre 2015 et 2023',
                        color: '#55423D',
                        font: {
                            size: 14,
                            family: 'Montserrat'
                        }
                    }
                }
            }
        }
    );
}

let hybrideAdded = false;

function createFestivalChart(chartType, dataJson) {
    const annees = dataJson.Part4.map(entry => entry.annee);
    const presentiel = dataJson.Part4.map(entry => entry.presentiel);
    const distanciel = dataJson.Part4.map(entry => entry.distanciel);
    const hybride = dataJson.Part4.map(entry => entry.hybride);

    if (window.chartFestival) {
        window.chartFestival.destroy();
    }

    window.chartFestival = new Chart(
        document.getElementById('myChartFestival'),
        {
            type: chartType,
            data: {
                labels: annees,
                datasets: [
                    {
                        label: 'Présentiel',
                        backgroundColor: 'rgb(255, 99, 132)',
                        borderColor: 'rgb(255, 99, 132)',
                        color: '#55423D',
                        data: presentiel,
                        fill: false
                    },
                    {
                        label: 'Distanciel',
                        backgroundColor: 'rgb(54, 162, 235)',
                        borderColor: 'rgb(54, 162, 235)',
                        color: '#55423D',
                        data: distanciel,
                        fill: false
                    }
                ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Nombre de festivals',
                            color: '#55423D',
                            font: {
                                size: 14,
                                family: 'Montserrat'
                            }
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Années',
                            color: '#55423D',
                            font: {
                                size: 14,
                                family: 'Montserrat'
                            }
                        }
                    }
                },
                plugins: {
                    title: {
                        display: true,
                        text: 'Évolution des festivals (présentiel et distanciel) entre 2018 et 2022',
                        color: '#55423D',
                        font: {
                            size: 14,
                            family: 'Montserrat'
                        }
                    }
                }
            }
        }
    );
}

function createMuseeChart(dataJson) {
    const annees = dataJson.PartMusees.map(entry => entry.annee);
    const presentiel = dataJson.PartMusees.map(entry => entry.presentiel);
    const distanciel = dataJson.PartMusees.map(entry => entry.distanciel);

    if (window.chartMusees) {
        window.chartMusees.destroy();
    }

    window.chartMusees = new Chart(
        document.getElementById('myChartMusees'),
        {
            type: 'bar', 
            data: {
                labels: annees,  
                datasets: [
                    {
                        label: 'Présentiel',
                        backgroundColor: 'rgb(255, 99, 132)',
                        borderColor: 'rgb(255, 99, 132)',
                        data: presentiel,
                        stack: 'Stack 0', 
                    },
                    {
                        label: 'Distanciel',
                        backgroundColor: 'rgb(54, 162, 235)',
                        borderColor: 'rgb(54, 162, 235)',
                        data: distanciel,
                        stack: 'Stack 0',
                    }
                ]
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        stacked: true,
                        title: {
                            display: true,
                            text: 'Années',
                            color: '#55423D',
                            font: {
                                size: 14,
                                family: 'Montserrat'
                            }
                        }
                    },
                    y: {
                        stacked: true,
                        beginAtZero: true,
                        max: 100,
                        title: {
                            display: true,
                            text: 'Fréquentation (millions)',
                            color: '#55423D',
                            font: {
                                size: 14,
                                family: 'Montserrat'
                            }
                        }
                    }
                },
                plugins: {
                    title: {
                        display: true,
                        text: 'Fréquentation des musées en présentiel et distanciel entre 2018 et 2022',
                        color: '#55423D',
                        font: {
                            size: 14,
                            family: 'Montserrat'
                        }
                    }
                }
            }
        }
    );
}

function createFractureChart(dataJson) {

    const tranchesAge = dataJson.Fracture.map(entry => entry.tranche_age);
    const accesLimite = dataJson.Fracture.map(entry => entry.acces_limite);

    if (window.chartFracture) {
        window.chartFracture.destroy();
    }

    window.chartFracture = new Chart(
        document.getElementById('myChartFracture'),
        {
            type: 'radar', 
            data: {
                labels: tranchesAge,
                datasets: [
                    {
                        label: 'Accès limité à Internet (%)',
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        pointBackgroundColor: 'rgba(54, 162, 235, 1)',
                        data: accesLimite 
                    }
                ]
            },
            options: {
                responsive: true,
                scales: {
                    r: {
                        beginAtZero: true,
                        max: 30, 
                        ticks: {
                            stepSize: 10,
                            color: '#55423D',
                        },
                        pointLabels: {
                            color: '#55423D',
                            font: {
                                size: 14,
                                family: 'Montserrat'
                            }
                        }
                    }
                },
                plugins: {
                    title: {
                        display: true,
                        text: 'Accès limité à Internet par tranche d\'âge en 2023',
                        color: '#55423D',
                        font: {
                            size: 14,
                            family: 'Montserrat'
                        }
                    }
                }
            }
        }
    );
}


let currentCostType = 'pie';

function createChartCost(chartType, dataJson, isSubData = false) {
    let labels, data;

    if (!isSubData) {
        labels = dataJson.Cost.map(entry => entry.plateforme);
        data = dataJson.Cost.map(entry => entry.pourcentage);
    } 

    else {
        labels = dataJson.Sub.map(entry => entry.annee);
        data = dataJson.Sub.map(entry => entry.prix_moyen);
    }

    if (window.CostChart) {
        window.CostChart.destroy();
    }

    window.CostChart = new Chart(
        document.getElementById('myChartCost'),
        {
            type: chartType,
            data: {
                labels: labels,
                datasets: [{
                    label: isSubData ? 'Prix Moyen Abonnement ($)' : 'Pourcentage des Plateformes',
                    data: data,
                    backgroundColor: chartType === 'pie' 
                        ? ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF']
                        : 'rgba(255, 99, 132, 0.3)',
                    borderColor: chartType === 'pie' ? undefined : '#FF6384',
                    borderWidth: chartType === 'pie' ? undefined : 1,
                    fill: chartType !== 'line' ? false : true,
                }]
            },
            options: {
                responsive: true,
                scales: chartType === 'line' ? {
                    x: {
                        title: {
                            display: true,
                            text: 'Années',
                            color: '#F9F4EF',
                            font: {
                                size: 14,
                                family: 'Montserrat'
                            }
                        },
                        ticks: {
                            color: 'white',
                        },
                        grid: {
                            color: 'grey'
                        }
                    },
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            
                            text: 'Prix (€)',
                            color: '#F9F4EF',
                            font: {
                                size: 14,
                                family: 'Montserrat'
                            }
                        },
                        ticks: {
                            color: 'white',
                        },
                        grid: {
                            color: 'grey'
                        }
                    }
                } : {},
                plugins: {
                    title: {
                        display: true,
                        text: isSubData ? 'Prix moyen des abonnements de plateformes de streaming entre 2014 et 2024' : 'Répartition des parts de marché du streaming en France',
                        color: '#F9F4EF',
                        font: {
                            size: 14,
                            family: 'Montserrat'
                        }
                    },
                    legend: {
                        labels: {
                            color: '#F9F4EF',
                            font: {
                                size: 14,
                                family: 'Montserrat'
                            }
                        }
                    }
                }
            }
        }
    );
}

let currentImpactType = 'bar';

function createChartImpact(chartType, dataJson, isSubData = false) {
    let labels, data;

    if (chartType === 'bar') {
        labels = dataJson.Vente.map(entry => entry.annee);
        data = dataJson.Vente.map(entry => entry.ligne);
        const dataMagasin = dataJson.Vente.map(entry => entry.magasin);

        const datasets = [
            {
                label: 'Ventes en magasin (%)',
                data: dataMagasin,
                backgroundColor: 'rgba(255, 99, 132, 1)',
            },
            {
                label: 'Ventes en ligne (%)',
                data: data,
                backgroundColor: 'rgba(54, 162, 235, 1)',
            }
        ];

        const chartConfig = {
            type: 'bar',
            data: {
                labels: labels,
                datasets: datasets,
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Années',
                            color: '#55423D',
                            font: {
                                size: 14,
                                family: 'Montserrat'
                            }
                        },
                        ticks: {
                            color: '#55423D',
                        },
                        grid: {
                            color: 'grey'
                        }
                    },
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Pourcentage (%)',
                            color: '#55423D',
                            font: {
                                size: 14,
                                family: 'Montserrat'
                            }
                        },
                        ticks: {
                            color: '#55423D',
                        },
                        grid: {
                            color: 'grey'
                        }
                    }
                },
                plugins: {
                    title: {
                        display: true,
                        text: 'Ventes de livres en ligne vs en magasin entre 2016 et 2023',
                        color: '#55423D',
                        font: {
                            size: 14,
                            family: 'Montserrat'
                        }
                    },
                    legend: {
                        labels: {
                            color: '#55423D',
                            font: {
                                size: 12,
                                family: 'Montserrat'
                            }
                        }
                    }
                }
            }
        };

        if (window.ImpactChart) {
            window.ImpactChart.destroy();
        }

        window.ImpactChart = new Chart(document.getElementById('myChartImpact'), chartConfig);
    } else if (chartType === 'line') {
        labels = dataJson.Chiffre_Affaires.map(entry => entry.annee);
        data = dataJson.Chiffre_Affaires.map(entry => entry.ca);

        const chartConfig = {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Chiffre d\'affaires des librairies indépendantes (millions d\'euros)',
                    data: data,
                    borderColor: '#FF6384',
                    backgroundColor: 'rgba(255, 99, 132, 0.3)',
                    fill: true,
                    font: {
                        size: 12,
                        family: 'Montserrat'
                    }
                }]
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Années',
                            color: '#55423D',
                            font: {
                                size: 14,
                                family: 'Montserrat'
                            }
                        },
                        ticks: {
                            color: '#55423D',
                        },
                        grid: {
                            color: 'grey'
                        }
                    },
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Chiffre d\'affaires (millions d\'euros)',
                            color: '#55423D',
                            font: {
                                size: 14,
                                family: 'Montserrat'
                            }
                        },
                        ticks: {
                            color: '#55423D',
                        },
                        grid: {
                            color: 'grey'
                        }
                    }
                },
                plugins: {
                    title: {
                        display: true,
                        text: 'Chiffre d\'affaires des librairies indépendantes entre 2016 et 2023',
                        color: '#55423D',
                        font: {
                            size: 14,
                            family: 'Montserrat'
                        }
                    },
                    legend: {
                        labels: {
                            color: '#55423D',
                            font: {
                                size: 14,
                                family: 'Montserrat'
                            }
                        }
                        
                    }
                }
            }
        };

        if (window.ImpactChart) {
            window.ImpactChart.destroy();
        }

        window.ImpactChart = new Chart(document.getElementById('myChartImpact'), chartConfig);
    }
}

function updatePadding(chartType) {
    const costCanva = document.getElementById('cost_canva');
    
    if (chartType === 'line') {
        costCanva.style.padding = '5% 3% 2% 3%';
    } else if (chartType === 'pie') {
        costCanva.style.padding = '2% 0 2% 8%';
    }
}

fetch('./json/data.json')
.then(response => response.json())
.then(dataJson => {

    createMuseeChart(dataJson);
    createChart(currentChartLivres, dataJson);
    createFestivalChart('bar', dataJson);
    createFractureChart(dataJson);
    createChartCost(currentCostType,dataJson);
    createChartImpact(currentImpactType,dataJson);

    document.getElementById('toggleChartType').addEventListener('click', function () {
        currentChartLivres = currentChartLivres === 'line' ? 'bar' : 'line';
        createChart(currentChartLivres, dataJson);
    });

    document.getElementById('add_table').addEventListener('click', function () {
        const buttonText = this.querySelector('span'); 
        const svgPaths = this.querySelectorAll('path');
        
        if (buttonText.textContent === 'Ajouter une donnée') {

            chartFestival.data.datasets.push({
                label: 'Festivals en Hybride',
                backgroundColor: 'rgb(75, 192, 192)',
                borderColor: 'rgb(75, 192, 192)',
                data: [0, 0, 1000, 1000, 800],
                fill: false,
            });
            chartFestival.update();

            buttonText.textContent = 'Supprimer une donnée';
            svgPaths[1].style.display = 'none';
        } else {

            chartFestival.data.datasets.pop();
            chartFestival.update();
            
            buttonText.textContent = 'Ajouter une donnée';
            svgPaths[1].style.display = 'block';
        }
    });
    document.getElementById('toggle_Cost').addEventListener('click', async function () {
    try {
        const data = await loadData(); 

        if (data) {
            if (currentCostType === 'pie') {
                currentCostType = 'line';
                updatePadding('line');
                createChartCost('line', data, true);
                document.getElementById('myChartCost').setAttribute('data-current-chart', 'subscriptions');
            } else {
                currentCostType = 'pie';
                updatePadding('pie');
                createChartCost('pie', data, false);
                document.getElementById('myChartCost').setAttribute('data-current-chart', 'platforms');
            }
        } else {
            console.error("Aucune donnée à afficher");
        }
        console.log(document.getElementById('myChartImpact'))

    } catch (error) {
        console.error("Erreur lors du chargement des données:", error);
    }
    });

    
    document.getElementById('toggle_Impact').addEventListener('click', async function () {
    try {
        const data = await loadData();
    
        if (currentImpactType === 'bar') {
            currentImpactType = 'line';
            // updatePadding('line');
            createChartImpact('line', data);
            document.getElementById('myChartImpact').setAttribute('data-current-chart', 'chiffre_affaires');
        } else {
            currentImpactType = 'bar';
            // updatePadding('bar');
            createChartImpact('bar', data);
            document.getElementById('myChartImpact').setAttribute('data-current-chart', 'ventes');
        }
        console.log(document.getElementById('myChartImpact'))
    } catch (error) {
        console.error("Erreur lors du chargement des données:", error);
    }
    });
    
})
.catch(error => console.error('Erreur lors du chargement des données JSON:', error));


