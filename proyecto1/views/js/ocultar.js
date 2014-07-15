$(document).ready(
        function() {
		
				
			$('#form1').bootstrapValidator({//validacion continenete
					message: 'This value is not valid',
					feedbackIcons: {
						valid: 'glyphicon glyphicon-ok',
						invalid: 'glyphicon glyphicon-remove',
						validating: 'glyphicon glyphicon-refresh'
					},
					submitHandler: function(validator, form, submitButton) {
						// Do nothing
					},
                fields: {//abre fields
                    
					nombre: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'campo de continente obligatorio'
                            },
                            stringLength: {
                                max: 15,
                                message: 'longitud mayor a 15'
                            }
                        }
                    }
                  
                }//cierra fields
            });//cierre total		
			

			$('#form2').bootstrapValidator({//validacion pais
					message: 'This value is not valid',
					feedbackIcons: {
						valid: 'glyphicon glyphicon-ok',
						invalid: 'glyphicon glyphicon-remove',
						validating: 'glyphicon glyphicon-refresh'
					},
					submitHandler: function(validator, form, submitButton) {
						// Do nothing
					},
                fields: {//abre fields
                    
					nombre: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'campo de pais obligatorio'
                            },
                            stringLength: {
                                max: 15,
                                message: 'longitud mayor a 15'
                            }
                        }
                    }
                  
                }//cierra fields
            });//cierre total	
			
			
			$('#form3').bootstrapValidator({ //validacion ciudad
					message: 'This value is not valid',
					feedbackIcons: {
						valid: 'glyphicon glyphicon-ok',
						invalid: 'glyphicon glyphicon-remove',
						validating: 'glyphicon glyphicon-refresh'
					},
					submitHandler: function(validator, form, submitButton) {
						// Do nothing
					},
                fields: {//abre fields
                    
					nombre: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'campo de ciudad obligatorio'
                            },
                            stringLength: {
                                max: 15,
                                message: 'longitud mayor a 15'
                            }
                        }
                    }
                  
                }//cierra fields
            });//cierre total
			
			
			
			$('#form4').bootstrapValidator({ //validacion ciudad
					message: 'This value is not valid',
					feedbackIcons: {
						valid: 'glyphicon glyphicon-ok',
						invalid: 'glyphicon glyphicon-remove',
						validating: 'glyphicon glyphicon-refresh'
					},
					submitHandler: function(validator, form, submitButton) {
						// Do nothing
					},
                fields: {//abre fields
                    
					nombre: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'campo de estadio obligatorio'
                            },
                            stringLength: {
                                max: 15,
                                message: 'longitud mayor a 15'
                            }
                        }
                    }
                  
                }//cierra fields
            });//cierre total
			
			
			$('#form5').bootstrapValidator({ //validacion ciudad
					message: 'This value is not valid',
					feedbackIcons: {
						valid: 'glyphicon glyphicon-ok',
						invalid: 'glyphicon glyphicon-remove',
						validating: 'glyphicon glyphicon-refresh'
					},
					submitHandler: function(validator, form, submitButton) {
						// Do nothing
					},
                fields: {//abre fields
                    
					nombre: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'campo de posicion obligatorio'
                            },
                            stringLength: {
                                max: 15,
                                message: 'longitud mayor a 15'
                            }
                        }
                    }
                  
                }//cierra fields
            });//cierre total
			
			
			
			$('#form6').bootstrapValidator({ //validacion ciudad
					message: 'This value is not valid',
					feedbackIcons: {
						valid: 'glyphicon glyphicon-ok',
						invalid: 'glyphicon glyphicon-remove',
						validating: 'glyphicon glyphicon-refresh'
					},
					submitHandler: function(validator, form, submitButton) {
						// Do nothing
					},
                fields: {//abre fields
                    
					nombre: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'campo de equipo obligatorio'
                            },
                            stringLength: {
                                max: 15,
                                message: 'longitud mayor a 15'
                            }
                        }
                    }
                  
                }//cierra fields
            });//cierre total
			

			$('#form7').bootstrapValidator({ //validacion ciudad
					message: 'This value is not valid',
					feedbackIcons: {
						valid: 'glyphicon glyphicon-ok',
						invalid: 'glyphicon glyphicon-remove',
						validating: 'glyphicon glyphicon-refresh'
					},
					submitHandler: function(validator, form, submitButton) {
						// Do nothing
					},
                fields: {//abre fields
                    
					numero: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'campo obligatorio'
                            },
							digits: {
								message: 'campo numerico'
							}
                        }
                    }
                  
                }//cierra fields
            });//cierre total
			
			
			//ocualtar tipo de integrante
				$('#ocultar2').hide(0);
                $('#ocultar3').hide(0);
		
				$('#mostrar2').click(
                                function() {
                                    $('#ocultar2').show('slow');
                                    $('#ocultar3').hide(0);
                                }
                        );
                
                $('#mostrar3').click(
                                function() {
                                    $('#ocultar3').show('slow');
                                    $('#ocultar2').hide(0);
                                }
                        );//fin ocultar integrante
						
						
				$('#id_form8').bootstrapValidator({
					message: 'This value is not valid',
					feedbackIcons: {
						valid: 'glyphicon glyphicon-ok',
						invalid: 'glyphicon glyphicon-remove',
						validating: 'glyphicon glyphicon-refresh'
					},
					submitHandler: function(validator, form, submitButton) {
						// Do nothing
					},
                fields: {//abre fields
                    nombre: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'campo obligatorio'
                            },
                            stringLength: {
                                max: 30,
                                message: 'longitud mayor a 30'
                            }
                        }
                    },
                    apellido: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'campo oblogatorio'
                            }
                        }
                    },
                    peso: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'campo oblogatorio'
                            },
							digits: {
								message: 'peso numerico'
							}
                        }
                    },                    
                    edad: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'The metodologia is required and cannot be empty'
                            },
							digits: {
                            message: 'edad numerica'
							},
							stringLength: {
                                min: 2,
                                max: 2,
                                message: 'edad no menor de 10 y no mayor de 99'
                            }
                        }
                    },
					estatura: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'The introduccion is required and cannot be empty'
                            },
							digits: {
								message: 'estatura numerica'
							}
                        }
                    }

                }//cierra fields
            });//cierre total
			
			
			


                    }
       
);
	
	