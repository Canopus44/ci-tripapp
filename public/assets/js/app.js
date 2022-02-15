//

// Fin espacio para scrips de otras extenciones

// Metodos y Funciones en VUE para contenido dinamico en la vista
var app = new Vue({
  el: "#App",
  data: {
    regiones: [
      "Región Centro Oriente",
      "Región Caribe",
      "Región Pacífico",
      "Región Eje Cafetero - Antioquia",
      "Región Centro Sur",
      "Región Llano",
    ],
    municipios: [],
    departamentos: [],
    infoDataAPI: [],

    // Variables para el filtro
    departamento: "",
    region: "",
    municipio: "",
  },
  mounted: function () {
    // Al cargar el aplicativo, se ejecuta la función getDataAPIDepartaments
    this.getDataAPIDepartments();    
  },
  methods: {
    // Función que obtiene los datos de la API
    getDataAPIDepartments: function () {
      fetch("https://www.datos.gov.co/resource/xdk5-pm3f.json")
        .then((response) => response.json())
        .then((json) => {
          this.infoDataAPI = json;
          console.log(json[0].municipio);

            for (let i = 0; i < json.length; i++) {
                this.municipios[i] = json[i].municipio;
                this.departamentos[i] = json[i].departamento;
            }
            const result = this.departamentos.reduce((acc,item)=>{
                if(!acc.includes(item)){
                    acc.push(item);
                }
                return acc;
              },[])

              this.departamentos = result;

        })
        .catch((error) => {
          console.error(error);
        });
    },
    
  },
});
