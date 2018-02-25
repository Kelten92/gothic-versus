<template>
<div id="top_bar">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-6">
				<section class="social">
					<div class="social__item">
						 <a class="social__link social__link--twitter" href="https://twitter.com/?lang=pl">
						 	<i class="fa fa-twitter-square" aria-hidden="true"></i>
						 </a>
					</div>
					<div class="social__item">
						 <a class="social__link social__link--github" href="https://github.com/">
						 	<i class="fa fa-github-square" aria-hidden="true"></i>
						 </a>
					</div>
				</section>
			</div>
			<div class="col-md-4 offset-md-4 col-6">
				<section class="auth">
					<div class="auth__item">
						 <a class="auth__link auth__link--login" href="https://twitter.com/?lang=pl">
						 	login
						 </a>
					</div>
					<div class="auth__item">
						 <a class="auth__link auth__link--register" href="https://github.com/">
						 	register
						 </a>
					</div>
				</section>
			</div>
		</div>
	</div>
</div>
</template>

<script>
export default {
  name: 'Navbar',
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
$twitter-color:#3695b7;
$success-color:#51891c;
$danger-color:#9f1e1e;

#top_bar{
	border-bottom:1px solid #414141;
}

.social{
	margin: 5px 0;

	&__item{
		float:left;
		margin:0 5px;
	}

	&__link{
		font-size:18px;
		transition:0.8s;
		&:hover{
			opacity:0.8;

		}
	}

	&__link--twitter{
		color:$twitter-color;
	}

	&__link--github{
		color:red;
	}
}

.auth{
	margin: 5px 0;
	float:right;

	&__item{
		float:left;
		margin:0 5px;
	}

	&__link{
		font-size:14px;
		transition:0.8s;
		&:hover{
			opacity:0.8;

		}
	}

	&__link--login{
		color:$success-color;
	}

	&__link--register{
		color:$danger-color;
	}
}
</style>
