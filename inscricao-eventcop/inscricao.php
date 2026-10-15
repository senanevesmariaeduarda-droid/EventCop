<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscrição no Workshop - EventCop</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-[#f5efe6] text-[#5A1215] min-h-screen flex flex-col">

    <!-- Header Superior -->
    <header class="bg-[#5A0505] text-white py-4 px-6 md:px-12 flex flex-wrap items-center justify-between shadow-md">
        <!-- Logo -->
        <div class="flex items-center space-x-3">
            <img src="logo bege.jpeg" alt="Logo EventCop" class="h-[60px] w-auto object-contain rounded-lg" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
            <span class="hidden text-xs bg-red-800 text-white p-1 rounded">⚠️ Erro ao carregar logo-bege.jpeg</span>
        </div>

        <!-- Menu Links -->
        <nav class="hidden md:flex items-center space-x-8 font-medium text-sm">
            <a href="#" class="hover:text-gray-300 transition">EventCop Empresas</a>
            <a href="#" class="hover:text-gray-300 transition">Cases</a>
            <a href="#" class="hover:text-gray-300 transition">Planos e Preços</a>
            <a href="#" class="hover:text-gray-300 transition">Sou um organizador</a>
        </nav>

        <!-- Botão Criar Evento -->
        <div>
            <a href="#" class="border border-white text-white px-5 py-2 rounded-full text-sm font-medium hover:bg-white hover:text-[#5A1215] transition">Criar Evento</a>
        </div>
    </header>

    <!-- Conteúdo Principal -->
    <main class="flex-1 grid grid-cols-1 lg:grid-cols-12 w-full">
        
        <!-- Coluna Esquerda -->
        <div class="lg:col-span-4 bg-[#7D1A1A] text-white p-8 md:p-12 flex flex-col justify-between relative overflow-hidden">
            <div class="z-10 mt-[100px]">
                <h1 class="text-2xl md:text-3xl font-bold leading-snug text-center lg:text-center">
                    Inscreva-se e receba <br>seu kit Event
                </h1>
            </div>

            <!-- Imagem do Banner -->
            <div class="z-10 my-12 flex flex-col justify-center items-center">
                <img src="imagem banner.png" alt="Kit Event" width="500px" class="object-contain mx-[500px]" onerror="this.src='imagem banner.png';">
                <span class="hidden text-xs bg-red-800 text-white p-2 rounded text-center">⚠️ Erro ao carregar imagem banner.png</span>
            </div>

            <div class="z-10 text-xs text-gray-300 text-center lg:text-left">
                Inscrição no workshop
            </div>
        </div>

        <!-- Coluna Direita (Formulário e Pagamento) -->
        <div class="lg:col-span-8 p-6 md:p-12 flex flex-col justify-center">
            <div class="max-w-2xl w-full mx-auto">
                
                <h2 class="text-3xl md:text-4xl font-bold text-[#5A1215] mb-8">Inscreva-se já!</h2>

                <form action="processar_inscricao.php" method="POST" class="space-y-6">
                    
                    <!-- Campo Nome -->
                    <div>
                        <label class="block text-sm font-medium text-[#5A1215] mb-1">Seu nome</label>
                        <input type="text" name="nome" required 
                            class="w-full bg-transparent border-2 border-[#5A1215] rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#5A1215]">
                    </div>

                    <!-- Campo E-mail -->
                    <div>
                        <label class="block text-sm font-medium text-[#5A1215] mb-1">Seu e-mail</label>
                        <input type="email" name="email" required 
                            class="w-full bg-transparent border-2 border-[#5A1215] rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#5A1215]">
                    </div>

                    <!-- Campo Telefone -->
                    <div>
                        <label class="block text-sm font-medium text-[#5A1215] mb-1">Telefone</label>
                        <div class="flex items-center border-2 border-[#5A1215] rounded-xl overflow-hidden bg-transparent">
                            <div class="flex items-center bg-[#5A1215] text-white px-3.5 py-3 space-x-1.5 shrink-0">
                                <img src= "Bandeira do BR.webp" width = "18px">
                                <span class="text-sm font-medium">+55</span>
                            </div>
                            <input type="tel" name="telefone" placeholder="(__) _____-____" required 
                                class="w-full bg-transparent px-4 py-3 focus:outline-none text-[#5A1215] placeholder-gray-500">
                        </div>
                    </div>

                    <!-- Seção Forma de Pagamento -->
                    <div class="pt-4">
                        <h3 class="text-2xl font-bold text-[#5A1215] mb-1">Forma de pagamento</h3>
                        <p class="text-sm text-gray-700 mb-4">Escolha a forma de pagamento para garantir sua inscrição</p>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-3 mb-6">
                            <label class="border-2 border-[#5A1215] rounded-xl p-3 flex items-center space-x-3 cursor-pointer bg-white/40">
                                <input type="radio" name="pagamento" value="pix" checked class="accent-[#5A1215]">
                                <span class="font-bold text-sm flex items-center gap-1"><img src = "icone.qrcode.png" width = "35px"> PIX</span>
                            </label>
                            <label class="border border-[#5A1215] rounded-xl p-3 flex items-center space-x-3 cursor-pointer hover:bg-white/20 transition">
                                <input type="radio" name="pagamento" value="cartao" class="accent-[#5A1215]">
                                <span class="text-sm flex items-center gap-1"><img src = "icone.cartao.png" width = "35px"> Cartão de crédito</span>
                            </label>
                            <label class="border border-[#5A1215] rounded-xl p-3 flex items-center space-x-3 cursor-pointer hover:bg-white/20 transition">
                                <input type="radio" name="pagamento" value="boleto" class="accent-[#5A1215]">
                                <span class="text-sm flex items-center gap-1"><img src = "icone.cod.png" width = "35px"> Boleto</span>
                            </label>
                        </div>

                        <!-- Box do PIX -->
                        <div class="bg-[#5A1215] text-white rounded-2xl p-6 flex flex-col md:flex-row gap-6 items-center shadow-lg">
                            <div class="bg-white p-2.5 rounded-xl flex-shrink-0 flex items-center justify-center">
                                <!-- Se tiver a imagem do QR Code, salve como qrcode.png na pasta -->
                                <img src="qrcode.png" alt="QR Code PIX" class="w-32 h-32 object-contain" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                                <span class="hidden text-[10px] text-red-600 font-bold p-2 text-center w-32">'QrCode.png'</span>
                            </div>

                            <div class="flex-1 space-y-3 w-full">
                                <h4 class="font-bold text-lg">Pague com PIX</h4>
                                <p class="text-xs text-gray-200">Escaneie o QR Code com o app do seu banco ou copie o código abaixo e cole no seu aplicativo.</p>
                                
                                <div class="text-[10px] text-gray-300">Código PIX</div>
                                <div class="flex items-center bg-[#7a1b1e] rounded-lg p-2 border border-[#8c2323]">
                                    <input type="text" readonly value="00020126580014br.gov.pix0136eventcop@eventos.com" 
                                        class="bg-transparent text-xs w-full text-white focus:outline-none truncate mr-2" id="pixCode">
                                    <button type="button" onclick="copyPix()" class="bg-white text-[#5A1215] px-3 py-1.5 rounded text-xs font-semibold flex items-center gap-1 hover:bg-gray-100 transition whitespace-nowrap">
                                        <img src = "icone.copy.png" width = "20px"> Copiar código
                                    </button>
                                </div>

                                <div class="flex items-center space-x-2 bg-[#F2E6DA] p-2 rounded-lg text-xs text-[#5A0505]">
                                    <img src = "Relogio.png" width = "35px">
                                    <span>O pagamento deve ser realizado em até 30 minutos para garantir sua vaga.</span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Rodapé do Formulário -->
                    <div class="bg-[#5A1215] text-white rounded-2xl p-4 flex flex-col sm:flex-row items-center justify-between gap-4 shadow-lg mt-6">
                        <div class="flex items-center space-x-3">
                            <div class="bg-[#F2E6DA] p-2.5 rounded-xl"><img src = "verificacao-de-escudo.png"></div>
                            <div>
                                <div class="font-bold text-sm">Pagamento seguro</div>
                                <div class="text-[11px] text-gray-300">Seus dados estão protegidos.</div>
                            </div>
                        </div>

                        <div class="text-center sm:text-right">
                            <div class="text-[11px] text-gray-300">Total da inscrição</div>
                            <div class="text-xl font-bold">R$ 40,00</div>
                        </div>

                        <div>
                            <button type="submit" class="bg-white text-[#5A1215] font-bold px-6 py-3 rounded-full hover:bg-gray-100 transition shadow-md flex items-center gap-2">
                                Finalizar inscrição &rarr;
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </main>

    <script>
        function copyPix() {
            var copyText = document.getElementById("pixCode");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            navigator.clipboard.writeText(copyText.value);
            alert("Código PIX copiado com sucesso!");
        }
    </script>
</body>
</html>