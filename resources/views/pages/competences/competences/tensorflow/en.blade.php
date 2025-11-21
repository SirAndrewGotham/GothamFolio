<x-frontend.layouts.app>
    @push('section-styles')
        <style>
            /* Alpine.js specific gradient that isn't in the main app.css */
            .alpine-gradient {
                background: linear-gradient(135deg, #8b5cf6 0%, #4c1d95 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
            }
        </style>
    @endpush

    @push('scripts')
        <script>
            // Skill bar animation
            document.addEventListener('DOMContentLoaded', function () {
                const skillBars = document.querySelectorAll('.skill-bar-inner');

                skillBars.forEach(bar => {
                    const width = bar.getAttribute('data-width');
                    setTimeout(() => {
                        bar.style.width = width;
                    }, 100);
                });
            });
        </script>
@endpush

        <!-- Main Content -->
        <section class="py-16">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                        <!-- Main Content -->
                        <div class="lg:col-span-2 space-y-8">
                            <!-- About TensorFlow -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#FF6F00] mr-3"></i>
                                    About TensorFlow
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>TensorFlow</strong> is an end-to-end open-source platform for machine learning developed by Google.
                                        It has a comprehensive, flexible ecosystem of tools, libraries, and community resources that lets
                                        researchers push the state-of-the-art in ML and developers easily build and deploy ML-powered applications.
                                    </p>

                                    <h3>Key Advantages</h3>
                                    <ul>
                                        <li><strong>Flexible Architecture</strong> - Deploy computation to one or more CPUs or GPUs</li>
                                        <li><strong>Production Ready</strong> - Scale from research to production with the same code</li>
                                        <li><strong>Keras Integration</strong> - High-level API for fast experimentation</li>
                                        <li><strong>Cross-Platform</strong> - Run on desktops, clusters, mobile devices, and edge devices</li>
                                        <li><strong>TensorBoard</strong> - Powerful visualization toolkit for model debugging</li>
                                        <li><strong>Large Community</strong> - Extensive documentation, tutorials, and pre-trained models</li>
                                        <li><strong>TF Ecosystem</strong> - TF Lite, TF.js, TF Extended for different deployment scenarios</li>
                                    </ul>

                                    <h3>Core Components</h3>
                                    <p>
                                        TensorFlow provides a complete ecosystem for machine learning development:
                                    </p>
                                    <ul>
                                        <li><strong>TensorFlow Core</strong> - Low-level API for building and training models</li>
                                        <li><strong>Keras</strong> - High-level neural networks API</li>
                                        <li><strong>TensorFlow Datasets</strong> - Collection of ready-to-use datasets</li>
                                        <li><strong>TensorBoard</strong> - Visualization toolkit</li>
                                        <li><strong>TensorFlow Lite</strong> - Lightweight solution for mobile and edge devices</li>
                                        <li><strong>TensorFlow.js</strong> - JavaScript library for training and deployment</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- My TensorFlow Journey -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#FF6F00] mr-3"></i>
                                    My Journey with TensorFlow
                                </h2>
                                <div class="content-section">
                                    <p>
                                        I started learning TensorFlow in 2022 to expand my machine learning capabilities into deep learning.
                                        Over 2+ years, I've built various neural network architectures, from simple feedforward networks
                                        to convolutional and recurrent networks. My experience focuses on practical applications and
                                        understanding the underlying principles of deep learning.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div class="bg-gradient-to-br from-orange-50 to-amber-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-image text-[#FF6F00] mr-2"></i>
                                                Computer Vision
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Built CNN architectures for image classification,
                                                object detection, and image segmentation tasks.
                                            </p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-language text-purple-500 mr-2"></i>
                                                Natural Language Processing
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Developed RNN and Transformer models for text classification,
                                                sentiment analysis, and sequence generation.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- My Experience -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#FF6F00] mr-3"></i>
                                    My Experience with TensorFlow
                                </h2>
                                <div class="content-section">
                                    <p>
                                        With 2+ years of hands-on experience, I've developed practical skills in building,
                                        training, and deploying neural networks using TensorFlow and Keras.
                                    </p>

                                    <h3>Core Skills</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Building neural networks with Keras</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Data preprocessing and pipelines</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Model training and evaluation</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Hyperparameter tuning</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Transfer learning</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>TensorBoard visualization</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Model saving and deployment</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Custom layer creation</span>
                                        </div>
                                    </div>

                                    <h3>Neural Network Architectures</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                        <span class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Dense Networks</span>
                                        <span class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">CNNs</span>
                                        <span class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">RNNs/LSTMs</span>
                                        <span class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Autoencoders</span>
                                        <span class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">GANs</span>
                                        <span class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">Transfer Learning</span>
                                        <span class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">Custom Layers</span>
                                        <span class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Callbacks</span>
                                    </div>

                                    <h3>Deep Learning Workflow</h3>
                                    <ul>
                                        <li><strong>Data Preparation</strong> - Loading, preprocessing, and augmenting data</li>
                                        <li><strong>Model Architecture</strong> - Designing neural network architectures</li>
                                        <li><strong>Training Configuration</strong> - Setting up optimizers, loss functions, and metrics</li>
                                        <li><strong>Model Training</strong> - Training with validation and monitoring</li>
                                        <li><strong>Evaluation & Tuning</strong> - Analyzing performance and optimizing hyperparameters</li>
                                        <li><strong>Deployment</strong> - Saving models and deploying for inference</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Neural Network Types -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-network-wired text-[#FF6F00] mr-3"></i>
                                    Neural Network Architectures
                                </h2>
                                <div class="content-section">
                                    <h3>Convolutional Neural Networks (CNNs)</h3>
                                    <p>
                                        Experience building CNN architectures for computer vision tasks:
                                    </p>
                                    <ul>
                                        <li><strong>Image Classification</strong> - Building models to classify images into categories</li>
                                        <li><strong>Object Detection</strong> - Identifying and locating objects within images</li>
                                        <li><strong>Transfer Learning</strong> - Using pre-trained models like VGG, ResNet, MobileNet</li>
                                        <li><strong>Data Augmentation</strong> - Applying transformations to increase dataset diversity</li>
                                        <li><strong>Feature Extraction</strong> - Using CNNs as feature extractors</li>
                                    </ul>

                                    <h3>Recurrent Neural Networks (RNNs)</h3>
                                    <p>
                                        Developed sequence models for time series and NLP tasks:
                                    </p>
                                    <ul>
                                        <li><strong>LSTM Networks</strong> - Handling long-term dependencies in sequences</li>
                                        <li><strong>GRU Networks</strong> - Gated recurrent units for efficient sequence modeling</li>
                                        <li><strong>Time Series Forecasting</strong> - Predicting future values in temporal data</li>
                                        <li><strong>Text Generation</strong> - Character-level and word-level language models</li>
                                        <li><strong>Sentiment Analysis</strong> - Classifying text sentiment using RNNs</li>
                                    </ul>

                                    <h3>Advanced Architectures</h3>
                                    <p>
                                        Experience with more complex neural network designs:
                                    </p>
                                    <ul>
                                        <li><strong>Autoencoders</strong> - Unsupervised learning for dimensionality reduction</li>
                                        <li><strong>Generative Adversarial Networks (GANs)</strong> - Generating synthetic data</li>
                                        <li><strong>Siamese Networks</strong> - Learning similarity metrics</li>
                                        <li><strong>Attention Mechanisms</strong> - Focus on relevant parts of input</li>
                                        <li><strong>Custom Layers</strong> - Implementing specialized neural network components</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- TensorFlow Ecosystem -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cubes text-[#FF6F00] mr-3"></i>
                                    TensorFlow Ecosystem
                                </h2>
                                <div class="content-section">
                                    <p>
                                        I have experience with various components of the TensorFlow ecosystem:
                                    </p>

                                    <h3>Keras API</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#FF6F00] mb-2">Sequential API</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Building linear stack of layers for simple architectures
                                                with easy-to-use interface
                                            </p>
                                        </div>
                                        <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#FF6F00] mb-2">Functional API</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Creating complex models with multiple inputs, outputs,
                                                and shared layers
                                            </p>
                                        </div>
                                        <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#FF6F00] mb-2">Model Subclassing</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Implementing custom models by subclassing tf.keras.Model
                                                for maximum flexibility
                                            </p>
                                        </div>
                                        <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#FF6F00] mb-2">Custom Layers</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Creating custom layers by subclassing tf.keras.layers.Layer
                                                for specialized operations
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Tools & Utilities</h3>
                                    <ul>
                                        <li><strong>TensorBoard</strong> - Visualizing training metrics, model graphs, and embeddings</li>
                                        <li><strong>tf.data</strong> - Building efficient data input pipelines</li>
                                        <li><strong>TensorFlow Datasets</strong> - Accessing pre-processed datasets</li>
                                        <li><strong>Model Checkpoints</strong> - Saving and restoring model training progress</li>
                                        <li><strong>Callbacks</strong> - Customizing training behavior during model training</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Training & Optimization -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-tachometer-alt text-[#FF6F00] mr-3"></i>
                                    Training & Optimization
                                </h2>
                                <div class="content-section">
                                    <p>
                                        I have experience with various techniques for training and optimizing deep learning models:
                                    </p>

                                    <h3>Training Techniques</h3>
                                    <ul>
                                        <li><strong>Optimizers</strong> - Adam, SGD, RMSprop with different learning rate schedules</li>
                                        <li><strong>Loss Functions</strong> - Categorical crossentropy, binary crossentropy, MSE, custom losses</li>
                                        <li><strong>Regularization</strong> - L1/L2 regularization, dropout, batch normalization</li>
                                        <li><strong>Early Stopping</strong> - Preventing overfitting by monitoring validation metrics</li>
                                        <li><strong>Learning Rate Scheduling</strong> - Adjusting learning rates during training</li>
                                    </ul>

                                    <h3>Performance Optimization</h3>
                                    <ul>
                                        <li><strong>GPU Acceleration</strong> - Utilizing GPU resources for faster training</li>
                                        <li><strong>Data Pipeline Optimization</strong> - Using tf.data for efficient data loading</li>
                                        <li><strong>Mixed Precision Training</strong> - Using float16 for faster computation</li>
                                        <li><strong>Model Pruning</strong> - Reducing model size while maintaining performance</li>
                                        <li><strong>Quantization</strong> - Reducing precision for faster inference</li>
                                    </ul>

                                    <h3>Transfer Learning</h3>
                                    <p>
                                        Extensive experience with transfer learning using pre-trained models:
                                    </p>
                                    <ul>
                                        <li>Fine-tuning pre-trained CNN models (VGG, ResNet, Inception)</li>
                                        <li>Feature extraction using pre-trained models</li>
                                        <li>Adapting models to new domains and tasks</li>
                                        <li>Understanding when and how to apply transfer learning</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Real-world Applications -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-chart-bar text-[#FF6F00] mr-3"></i>
                                    Real-world Applications
                                </h2>
                                <div class="content-section">
                                    <h3>Computer Vision Projects</h3>
                                    <p>
                                        Applied TensorFlow to various computer vision tasks:
                                    </p>
                                    <ul>
                                        <li><strong>Image Classification</strong> - Building models to classify images into categories</li>
                                        <li><strong>Object Detection</strong> - Identifying and locating objects in images</li>
                                        <li><strong>Image Segmentation</strong> - Pixel-level classification for image analysis</li>
                                        <li><strong>Style Transfer</strong> - Applying artistic styles to images</li>
                                        <li><strong>Image Generation</strong> - Creating new images using GANs</li>
                                    </ul>

                                    <h3>Natural Language Processing</h3>
                                    <p>
                                        Developed NLP applications using TensorFlow:
                                    </p>
                                    <ul>
                                        <li><strong>Text Classification</strong> - Sentiment analysis, topic classification</li>
                                        <li><strong>Text Generation</strong> - Creating coherent text sequences</li>
                                        <li><strong>Named Entity Recognition</strong> - Identifying entities in text</li>
                                        <li><strong>Machine Translation</strong> - Building sequence-to-sequence models</li>
                                        <li><strong>Text Summarization</strong> - Generating summaries from long documents</li>
                                    </ul>

                                    <h3>Other Applications</h3>
                                    <ul>
                                        <li><strong>Time Series Forecasting</strong> - Predicting future values in temporal data</li>
                                        <li><strong>Anomaly Detection</strong> - Identifying unusual patterns in data</li>
                                        <li><strong>Recommendation Systems</strong> - Building neural recommendation engines</li>
                                        <li><strong>Audio Processing</strong> - Speech recognition and audio classification</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- GitHub Projects -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fab fa-github text-[#FF6F00] mr-3"></i>
                                    Projects on GitHub
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Some of my TensorFlow deep learning projects can be found on GitHub:
                                    </p>
                                    <div class="mt-4">
                                        <a href="https://github.com/SirAndrewGotham" target="_blank" class="inline-flex items-center px-4 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg font-medium transition-colors">
                                            <i class="fab fa-github mr-2"></i>
                                            <span>SirAndrewGotham on GitHub</span>
                                        </a>
                                    </div>
                                    <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                        I continuously work on deep learning projects that demonstrate practical applications
                                        of TensorFlow for computer vision, natural language processing, and other AI tasks.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Sidebar -->
                        <div class="space-y-6">
                            <!-- Proficiency Card -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#FF6F00] mr-2"></i>
                                    Proficiency Level
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Overall Proficiency</span>
                                            <span class="text-sm font-bold text-[#FF6F00]">65%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#FF6F00] to-[#FF8F00]"
                                                 data-width="65%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Keras API</span>
                                            <span class="text-sm font-bold text-green-500">70%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="70%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">CNN Architectures</span>
                                            <span class="text-sm font-bold text-blue-500">68%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="68%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">RNN/LSTM Models</span>
                                            <span class="text-sm font-bold text-purple-500">62%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="62%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Model Deployment</span>
                                            <span class="text-sm font-bold text-red-500">60%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-red-500" data-width="60%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Quick Facts -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#FF6F00] mr-2"></i>
                                    Quick Facts
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#FF6F00] w-5 mr-3"></i>
                                        <span class="text-sm">Experience: <strong>2+ years</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#FF6F00] w-5 mr-3"></i>
                                        <span class="text-sm">Version: <strong>TensorFlow 2.13+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#FF6F00] w-5 mr-3"></i>
                                        <span class="text-sm">Projects: <strong>10+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-layer-group text-[#FF6F00] w-5 mr-3"></i>
                                        <span class="text-sm">Architectures: <strong>8+ types</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-rocket text-[#FF6F00] w-5 mr-3"></i>
                                        <span class="text-sm">Status: <strong>Active Learning</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Learning Path -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-graduation-cap text-[#FF6F00] mr-2"></i>
                                    Learning Path
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Basic neural networks</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Keras Sequential API</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">CNN architectures</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Transfer learning</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-spinner text-xs"></i>
                                        </div>
                                        <span class="text-sm">Advanced RNNs</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="w-6 h-6 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-clock text-xs"></i>
                                        </div>
                                        <span class="text-sm">Production deployment</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Related Competences -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#FF6F00] mr-2"></i>
                                    Related Competences
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/python" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-python text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#FF6F00] transition-colors">Python</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">70% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF6F00] transition-colors"></i>
                                    </a>
                                    <a href="/competences/scikit-learn" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-[#F7931E] flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-brain text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#FF6F00] transition-colors">Scikit-learn</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">70% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF6F00] transition-colors"></i>
                                    </a>
                                    <a href="/competences/numpy" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-[#4D77CB] flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-calculator text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#FF6F00] transition-colors">NumPy</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">78% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF6F00] transition-colors"></i>
                                    </a>
                                    <a href="/competences/matplotlib" class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div class="w-8 h-8 rounded-lg bg-[#11557C] flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-chart-line text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#FF6F00] transition-colors">Matplotlib</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">75% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#FF6F00] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Call to Action -->
                            <div class="bg-gradient-to-r from-[#FF6F00] to-[#FF8F00] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Interested in collaboration?</h3>
                                <p class="text-sm mb-4">Ready to discuss your deep learning project</p>
                                <a href="/contact" class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#FF6F00] font-medium rounded-lg hover:bg-gray-100 transition-colors">
                                    <i class="fas fa-envelope mr-2"></i>
                                    Contact Me
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </main>

</x-frontend.layouts.app>
