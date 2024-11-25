<template>
  <div class="privacy-notice">
    <h1>AVISO DE PRIVACIDAD</h1>
    <p>
      De conformidad con lo establecido en la Ley Federal de Protección de Datos Personales en Posesión de Particulares
      (la "Ley") y su Reglamento, se emite el siguiente Aviso de Privacidad:
    </p>

    <h2>Responsable de la Protección de sus Datos Personales:</h2>
    <p>
      <strong>SERVICIOS CORPORATIVOS QUANTUM DE OCCIDENTE</strong> (en adelante "la Empresa"), con domicilio en
      <strong>BELIZARIO DOMINGUEZ #30 COL CENTRO, MORELIA, MICHOACAN</strong>, es responsable del tratamiento de sus
      datos personales.
    </p>

    <h2>Datos Personales que se recaban:</h2>
    <p>
      Los datos personales que se recaban y que pueden ser sometidos a tratamiento incluyen, de manera enunciativa más
      no limitativa:
    </p>
    <ul>
      <li><strong>Datos de identificación:</strong> nombre, dirección, número telefónico, dirección de correo
        electrónico, entre otros.</li>
      <li><strong>Datos laborales:</strong> puesto, área, fecha de ingreso, entre otros.</li>
      <li><strong>Datos académicos:</strong> nivel de estudios, institución educativa, entre otros.</li>
    </ul>

    <h2>Finalidades del tratamiento de sus Datos Personales:</h2>
    <p>Los datos personales recabados serán utilizados para las siguientes finalidades:</p>
    <ul>
      <li>Administrar el acceso y uso del portal del empleado.</li>
      <li>Gestionar la información relacionada con la relación laboral.</li>
      <li>Facilitar la comunicación interna.</li>
      <li>Cumplir con obligaciones legales y regulatorias.</li>
    </ul>

    <h2>Medios para ejercer sus Derechos ARCO:</h2>
    <p>
      Usted tiene derecho a conocer qué datos personales tenemos de usted, para qué los utilizamos y las condiciones del
      uso que les damos (Acceso). Asimismo, es su derecho solicitar la corrección de su información personal en caso de
      que esté desactualizada, sea inexacta o incompleta (Rectificación); que la eliminemos de nuestros registros o
      bases de datos cuando considere que la misma no está siendo utilizada conforme a los principios, deberes y
      obligaciones previstas en la normativa (Cancelación); así como oponerse al uso de sus datos personales para fines
      específicos (Oposición). Estos derechos se conocen como derechos ARCO.
    </p>

    <h2>Cambios al Aviso de Privacidad:</h2>
    <p>
      El presente Aviso de Privacidad puede sufrir modificaciones, cambios o actualizaciones derivadas de nuevos
      requerimientos legales, de nuestras propias necesidades por los productos o servicios que ofrecemos, de nuestras
      prácticas de privacidad, de cambios en nuestro modelo de negocio, o por otras causas. Nos comprometemos a
      mantenerlo informado sobre los cambios que pueda sufrir el presente aviso, a través de nuestro portal web.
    </p>

    <h2>Consentimiento:</h2>
    <p>
      Mediante la aceptación del presente Aviso de Privacidad, usted otorga su consentimiento para el tratamiento de sus
      datos personales de acuerdo a las finalidades establecidas en el mismo.
    </p>
  </div>
</template>

<script>
export default {
  name: "PrivacyNotice",
};
</script>

<style scoped>
.privacy-notice {
  padding: 20px;
  border: 1px solid #ddd;
  border-radius: 8px;
  background-color: #f9f9f9;
  color: #333;
  font-family: Arial, sans-serif;
  line-height: 1.6;
  margin-block: 0;
  margin-inline: auto;
  max-inline-size: 800px;
}

.privacy-notice h1 {
  color: #2c3e50;
  font-size: 2rem;
  margin-block-end: 20px;
  text-align: center;
}

.privacy-notice h2 {
  color: #34495e;
  font-size: 1.5rem;
  margin-block-start: 20px;
}

.privacy-notice p {
  margin-block-end: 15px;
}

.privacy-notice ul {
  margin-block: 15px;
  margin-inline: 0;
  padding-inline-start: 20px;
}

.privacy-notice ul li {
  margin-block-end: 10px;
}

.privacy-notice strong {
  color: #2c3e50;
}
</style>
