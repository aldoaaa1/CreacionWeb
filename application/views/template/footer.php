<footer>
	<div id="footer1" class="container">
		<p>Creacion Web | Diseño Web Responsive Profesional</p>
		<p style="margin-left: auto;">Tel: 8119776885</p>
	</div>
</footer>
<style>
	footer{
		width: 100%;
		background-color: #3A3D3E;
		color: #999;
		font-size: 13px;
	}
	footer div{
		min-height: 30px;
	}
	#footer1{
		display: flex;
		flex-direction: row;
	}
	@media(max-width: 750px){
		#footer1 > p:nth-child(1){
			display: none;
		}
		#footer1 > p:nth-child(2){
			margin: auto;
		}
	}
</style>