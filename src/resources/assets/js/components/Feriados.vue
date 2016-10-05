<script>
	export default {

		props: ['feriados'],

		data() {

			return {

				sortProperty: 'data',

				sortDirection: 1 ,

				filterTerm: ''

			}
		},

		methods: {

			sort (ev, property) {
				
				ev.preventDefault()

				this.sortProperty = property

				if(this.sortDirection == 1) {

					this.sortDirection = -1

				} else {

					this.sortDirection = 1
				}
			}
		},

		ready() {

			this.$http.get('api/user')
    			.then(response => {
        		console.log(response.data);
    		});

			// this.list = JSON.parse(this.feriados)

			this.$http.get('/api/feriados').then((req) => this.feriados = req.data)
		}

	}
</script>
<template>
	<div class="center-block">
		<!-- <pre>{{ [sortProperty, sortDirection] | json }}</pre> -->
		<div class="well">
			<input type="text" class="form-control" placeholder="Filtrar a lista" v-model="filterTerm">
		</div>

		<table class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th><a href="#" @click="sort($event,'data')">Data</a></th>
					<th><a href="#" @click="sort($event,'descricao')">Descri&ccedil;&atilde;o</a></th>
				</tr>
			</thead>
			<tbody>
				
				<tr v-for="feriado in feriados | filterBy filterTerm | orderBy sortProperty sortDirection">
					<td>{{ feriado.data }}</td>
					<td>{{ feriado.descricao }}</td>
				</tr>
				
			</tbody>
		</table>
	</div>
</template>
<style scoped=""></style>