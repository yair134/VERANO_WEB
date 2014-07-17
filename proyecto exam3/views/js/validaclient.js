$(document).ready(
        function() {
			
			
            
               // $('#datetimepicker1').datetimepicker({
                 // language: 'es'
                //});
          
					
			$('#id_autor').bootstrapValidator({//validacion continenete
					message: 'This value is not valid',
					feedbackIcons: {
						valid: 'glyphicon glyphicon-ok',
						invalid: 'glyphicon glyphicon-remove',
						validating: 'glyphicon glyphicon-refresh'
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
                    },
					apellido: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'campo oblogatorio'
                            },
                            stringLength: {
                                max: 20,
                                message: 'longitud mayor a 15'
                            }
                        }
                    },
					email: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'campo obligatorio'
                            }
                        }
                    }
                  
                }//cierra fields
            });//cierre total		
			
			
						
						
				$('#id_revista').bootstrapValidator({
					message: 'This value is not valid',
					feedbackIcons: {
						valid: 'glyphicon glyphicon-ok',
						invalid: 'glyphicon glyphicon-remove',
						validating: 'glyphicon glyphicon-refresh'
					},
					
                fields: {//abre fields
                    nombre: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'campo obligatorio'
                            },
                            stringLength: {
                                max: 50,
                                message: 'longitud mayor a 50'
                            }
                        }
                    },
                    fecha: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'campo oblogatorio'
                            }
                        }
                    },
                    volumen: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'campo oblogatorio'
                            }
                        }
                    },                    
                    titulo: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'The metodologia is required and cannot be empty'
                            },
							stringLength: {
                                min: 5,
                                max: 50,
                                message: 'edad no menor de 10 y no mayor de 99'
                            }
                        }
                    },
					subtitulo: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'The metodologia is required and cannot be empty'
                            },
							stringLength: {
                                min: 5,
                                max: 50,
                                message: 'edad no menor de 10 y no mayor de 99'
                            }
                        }
                    },
					numero: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'The introduccion is required and cannot be empty'
                            },
							digits: {
								message: 'estatura numerica'
							}
                        }
                    },
					clave: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'The introduccion is required and cannot be empty'
                            },							
							stringLength: {
                                min: 5,
                                max: 50,
                                message: 'edad no menor de 10 y no mayor de 99'
                            }
							
                        }
                    },
					directorio: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'The introduccion is required and cannot be empty'
                            },
							stringLength: {
                                min: 5,
                                max: 50,
                                message: 'edad no menor de 10 y no mayor de 99'
                            }
							
                        }
                    },
					editorial: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'The introduccion is required and cannot be empty'
                            },
							stringLength: {
                                min: 5,
                                max: 50,
                                message: 'edad no menor de 10 y no mayor de 99'
                            }
							
                        }
                    }

                }//cierra fields
            });//cierre total
			
			$('#id_articulo').bootstrapValidator({
					message: 'This value is not valid',
					feedbackIcons: {
						valid: 'glyphicon glyphicon-ok',
						invalid: 'glyphicon glyphicon-remove',
						validating: 'glyphicon glyphicon-refresh'
					},
					
                fields: {//abre fields
				
                    nombre: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'campo obligatorio'
                            },
                            stringLength: {
                                max: 50,
                                message: 'longitud mayor a 50'
                            }
                        }
                    },
                    resumen: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'campo obligatorio'
                            },
                            stringLength: {
                                max: 200,
                                message: 'longitud mayor a 200'
                            }
                        }
                    },
					abstrac: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'campo obligatorio'
                            },
                            stringLength: {
                                max: 200,
                                message: 'longitud mayor a 200'
                            }
                        }
                    },
					introduccion: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'campo obligatorio'
                            },
                            stringLength: {
                                max: 200,
                                message: 'longitud mayor a 200'
                            }
                        }
                    },
					metodologia: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'campo obligatorio'
                            },
                            stringLength: {
                                max: 200,
                                message: 'longitud mayor a 200'
                            }
                        }
                    },
                    contenido: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'campo obligatorio'
                            },
                            stringLength: {
                                max: 200,
                                message: 'longitud mayor a 200'
                            }
                        }
                    },
					concluciones: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'campo obligatorio'
                            },
                            stringLength: {
                                max: 200,
                                message: 'longitud mayor a 200'
                            }
                        }
                    },
					agradecimientos: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'campo obligatorio'
                            },
                            stringLength: {
                                max: 200,
                                message: 'longitud mayor a 200'
                            }
                        }
                    },
					referencias: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'campo obligatorio'
                            },
                            stringLength: {
                                max: 200,
                                message: 'longitud mayor a 200'
                            }
                        }
                    },
					fecha_creacion: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'campo oblogatorio'
                            }
                        }
                    },				

                }//cierra fields
            });//cierre total
			
			
			
			$('#id_status').bootstrapValidator({
					message: 'This value is not valid',
					feedbackIcons: {
						valid: 'glyphicon glyphicon-ok',
						invalid: 'glyphicon glyphicon-remove',
						validating: 'glyphicon glyphicon-refresh'
					},
					
                fields: {//abre fields
				
                    status: {
                        //message: 'The nombre is not valid',
                        validators: {
                            notEmpty: {
                                message: 'campo obligatorio'
                            },
                            stringLength: {
                                max: 50,
                                message: 'longitud mayor a 50'
                            }
                        }
                    }                    			

                }//cierra fields
            });//cierre total
			


                    }
       
);
	
	