const comentarios = new Vue({
    el : "#comentariosPage",
    data: {
        ready: true,
        comentarios: []
    },
    methods:{
        async getComentarios(){
            await fetch("https://mitarea.co/trabajos/api/comentarios.php?action=get",{
                headers:{
                    'Content-Type': 'application/json'
                }
            }).then(resp => resp.json())
            .then( resp =>{
                if(resp.data){
                    this.comentarios = resp.data
                }
            });
        }
    },
    mounted(){
        this.getComentarios();
    }
});