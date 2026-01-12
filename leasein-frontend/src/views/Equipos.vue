const filtrarPorCodigos = async () => {
  const codigos = textarea.value
    .split('\n')
    .map(c => c.trim())
    .filter(Boolean)

  equiposFiltrados.value = equipos.value.filter(e =>
    codigos.some(c => e.codigo.includes(c))
  )

  const res = await axios.post(
    'http://localhost:8000/api/validar-equipos',
    { codigos }
  )

  noEncontrados.value = res.data.no_encontrados
}
