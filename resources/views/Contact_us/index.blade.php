{{-- <!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alpha4Tech - تأثير الكتابة والمسح</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #0f0f1e;
            font-family: 'Courier New', monospace;
            overflow: hidden;
        }
        
        .typing-container {
            position: relative;
            font-size: 3.5rem;
            font-weight: bold;
            text-align: center;
        }
        
        .text {
            display: inline-block;
            color: #4fc3f7;
            text-shadow: 
                0 0 10px rgba(79, 195, 247, 0.7),
                0 0 20px rgba(79, 195, 247, 0.5),
                0 0 30px rgba(79, 195, 247, 0.3);
            letter-spacing: 3px;
            position: relative;
        }
        
        .text::after {
            content: '|';
            position: absolute;
            right: -10px;
            animation: blink 0.7s infinite;
            color: #fff;
            text-shadow: 0 0 10px #fff;
        }
        
        @keyframes typing {
            0% { width: 0; }
            100% { width: 100%; }
        }
        
        @keyframes deleting {
            0% { width: 100%; }
            100% { width: 0; }
        }
        
        @keyframes blink {
            0%, 100% { opacity: 1; }
            50% { opacity: 0; }
        }
        
        /* التأثيرات الإضافية للخلفية */
        .background-effects {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }
        
        .particle {
            position: absolute;
            background: rgba(79, 195, 247, 0.3);
            border-radius: 50%;
            animation: float 15s infinite linear;
        }
        
        @keyframes float {
            to {
                transform: translateY(-100px) rotate(360deg);
            }
        }
    </style>
</head>
<body>
    <div class="typing-container">
        <div class="text">Alpha4Tech</div>
    </div>
    
    <div class="background-effects"></div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const textElement = document.querySelector('.text');
            const text = textElement.textContent;
            textElement.textContent = '';
            textElement.style.overflow = 'hidden';
            textElement.style.whiteSpace = 'nowrap';
            
            // إنشاء جزيئات الخلفية
            const background = document.querySelector('.background-effects');
            for(let i = 0; i < 50; i++) {
                const particle = document.createElement('div');
                particle.classList.add('particle');
                const size = Math.random() * 20 + 5;
                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                particle.style.left = `${Math.random() * 100}%`;
                particle.style.top = `${Math.random() * 100 + 100}%`;
                particle.style.animationDuration = `${Math.random() * 15 + 10}s`;
                particle.style.opacity = Math.random() * 0.5 + 0.1;
                background.appendChild(particle);
            }
            
            // دورة الكتابة والمسح
            function typingEffect() {
                let currentIndex = 0;
                const typingSpeed = 150; // سرعة الكتابة (بالميلي ثانية)
                const deletingSpeed = 80; // سرعة المسح (بالميلي ثانية)
                const pauseDuration = 1500; // مدة التوقف بعد الكتابة (بالميلي ثانية)
                
                function type() {
                    if (currentIndex <= text.length) {
                        textElement.textContent = text.substring(0, currentIndex);
                        currentIndex++;
                        setTimeout(type, typingSpeed);
                    } else {
                        setTimeout(deleteText, pauseDuration);
                    }
                }
                
                function deleteText() {
                    if (currentIndex >= 0) {
                        textElement.textContent = text.substring(0, currentIndex);
                        currentIndex--;
                        setTimeout(deleteText, deletingSpeed);
                    } else {
                        setTimeout(type, 500);
                    }
                }
                
                // بدء التأثير
                type();
            }
            
            // بدء التأثير بعد تأخير بسيط
            setTimeout(typingEffect, 1000);
        });
    </script>
</body>
</html> --}}
