<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

            
            <form action="index.html" class="tm-contact-form" method="POST">
               <input
                  type="text"
                  placeholder="Nombre"
                  value= {{ $nombre ?? '' }}
              
                />
              </div>
                <input
                  type="email"
                  id="contact_email"
                  name="contact_email"
                  class="form-control"
                  placeholder="Correo"
                  required
                  value = {{ $correo ?? '' }}
                />
              </div>
              <div class="form-group">
                <textarea
                  rows="5"
                  id="contact_message"
                  name="contact_message"
                  class="form-control"
                  placeholder="Comentario"
                  required
                ></textarea>
              </div>
              <div class="tm-text-right">
                <button type="submit" class="btn tm-btn tm-btn-big">
                  Enviar
                </button>
              </div>
            </form>
          </div>
        </div>
   

</body>
</html>