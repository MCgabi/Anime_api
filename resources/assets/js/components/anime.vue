<template>
   <div>
        <div class="float-left">
            <h1>Recently added anime</h1>
            <div class="card card-body border border-info mb-2" v-for="anime in animes" v-bind:key="anime.id" v-on:click="fetchCharacters(anime.id), fetchCreators(anime.id)">
           Title: {{ anime.title }}<br>
           Episodes: {{ anime.episodes }}<br>
           Generes: {{ anime.genres }} <br>
           Click to more info about this anime
            </div>
        </div>
        <div class="float-right">
           <div class="float-left mr-5">
           <h1>Characters:</h1>    
           <div class="card card-body border border-success mb-2" v-for="character in characters" v-bind:key="character.id">
           Name: {{ character.first_name }}<br>
           Surname: {{ character.last_name }} <br>
           Age: {{ character.age }} <br>
           Gender: {{ character.gender }}
           </div>
           </div>
           <div class="float-right ">
           <h1>Creators:</h1>
           <div class="card card-body border border-success mb-2" v-for="creator in creators" v-bind:key="creator.id">
           Name: {{ creator.first_name }}<br>
           Surname: {{ creator.last_name }}<br>
           Role: {{ creator.role }}
           </div>
           </div> 
        </div>
      
   </div>
</template>

<script>
export default {
    data(){
        return {
            animes: [],
            anime: {
                id: '',
                title: '',
                description: '',
                episodes: '',
                genres: ''

            },
            characters: [],
            character: {
                id: '',
                first_name: '',
                last_name: '',
                age: '',
                gender: '',
                bio: ''

            },
            creators: [],
            creator: {
                id: '',
                first_name: '',
                last_name: '',
                role: '',
            }
        }
    },
    created(){
        this.fetchAnimes();
    },
    methods: {
        fetchAnimes(){
            fetch('api/animenew/')
                .then(res => res.json())
                .then(res => this.animes = res.data);
        },
        fetchCharacters(anime_id){
            fetch('api/anime/'+anime_id+'/characters')
                .then(res => res.json())
                .then(res => this.characters = res.data);
        },
        fetchCreators(anime_id){
            fetch('api/anime/'+anime_id+'/creators')
                .then(res => res.json())
                .then(res => this.creators = res.data);
        }
    }
}
</script>
