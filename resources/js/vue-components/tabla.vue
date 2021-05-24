<template>
    <div class="
    flex flex-col overflow-auto justify-center items-center
    bg-green-500">
        <table class=" table-auto border border-separate
         border-green-200  ">
            <caption class="uppercase text-4xl text-green-700">{{ nombre_tabla }}</caption>
            <thead>
            <tr class="bg-green-400">
                <th class="px-4 p-2
                     text-3xl text-gray-500
                     " v-for="(campo, index) in campos">
                    <!--                    <input @keyup="filtra(campo, valor[index])" type="text" :size=len_campo[index]-->
                    <!--
                                             v-model=valor[index] />-->
                    <button @click="ordena(campo)">
                    {{ campo }}
                    </button>
                </th>
                <th></th><!-- Para edit -->
                <th></th> <!-- Para del -->
                <th></th> <!--Para consultas -->
            </tr>
            </thead>
            <tr class="bg-gray-50 hover:bg-gray-200 cursor-pointer"
                @click="editar(fila.id)"
                v-for="fila in filas">
                <td class="

                border-b-2 border-gray-500
                 px-4 p-2 text-xl text-gray-500  divide-green-600 " v-for="valor in fila">
                    {{ valor }}
                </td>
                <td>
                    <i class="h-10v w-5v  fa fa-pencil" aria-hidden="true">
                    </i>
                </td>
                <td class=" h-10v w-5v fa fa-trash " aria-hidden="true">
                </td>
                <td aria-hidden="true">
                    {{ consulta }}
                </td>
            </tr>
        </table>
    </div>
</template>

<script>
export default {
    name: "tabla",
    props: ['filas_serializadas', 'campos_serializados', 'nombre_tabla', 'consulta'],
    data() {
        return {
            filas: [],
            campos: [],
            valor: [],
            len_campo: [],
        }

    },
    created() {
        this.filas = JSON.parse(this.filas_serializadas);
        this.campos = JSON.parse(this.campos_serializados);
        this.campos.forEach((campo, index) => {
            this.len_campo[index] = campo.length;
        })
    },
    methods: {
        editar(id){
            var getUrl = window.location;
            var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            console.log("base de url  "+baseUrl);
            window.location.href=baseUrl+"/"+id;
        },
        ordena(campo) {
            this.filas=this.filas.sort((a,b)=>{
                var retorno
                if (a[campo]>b[campo])
                    retorno = 1;
                else
                    retorno =-1;
                return retorno;
            });
        },
        filtra(campo, valor) {
            // console.log("saludo");
            this.filas = JSON.parse(this.filas_serializadas);
            // console.log("quieres filtrar "+valor + " en el campo "+campo);
            this.filas = this.filas.filter((fila) => {
                    var texto = new String(fila[campo]);
                    // console.log("valor del campo "+texto);
                    if (texto.indexOf(valor) > -1)
                        return fila
                    // return ((fila[campo]).includes(valor));
                }
            );
            // console.log("filas "+this.filas);

        }
    }
}
</script>

<style scoped>

</style>
