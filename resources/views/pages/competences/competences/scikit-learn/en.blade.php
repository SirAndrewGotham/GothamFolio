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
    <main class="w-full pt-20">
        <!-- Breadcrumbs -->
        <section class="py-6 bg-gray-50 dark:bg-gray-800/30 border-b border-gray-200 dark:border-gray-700">
            <div class="fluid-container">
                <nav class="flex fade-in" aria-label="Breadcrumb">
                    <ol class="flex items-center space-x-2">
                        <li>
                            <a href="/"
                               class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <a href="/competences"
                                   class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Competences
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <a href="/competences/data-science"
                                   class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 transition-colors text-sm">
                                    Data Science
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
                                <span class="text-gray-700 dark:text-gray-300 text-sm font-medium">
                                        Scikit-learn
                                    </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Hero Section -->
        <section class="py-12 bg-gradient-to-br from-orange-50 to-amber-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 fade-in">
                        <!-- Icon and Basic Info -->
                        <div class="flex-shrink-0">
                            <div
                                class="w-24 h-24 rounded-2xl bg-gradient-to-r from-[#F7931E] to-[#FFB347] flex items-center justify-center text-white shadow-lg">
                                <i class="fas fa-brain text-4xl"></i>
                            </div>
                        </div>

                        <!-- Main Info -->
                        <div class="flex-grow text-center lg:text-left">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h1 class="text-4xl md:text-5xl font-bold mb-2 sm:mb-0 sklearn-gradient">
                                    Scikit-learn</h1>
                                <div class="flex items-center justify-center sm:justify-end space-x-4">
                                        <span
                                            class="px-3 py-1 bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 rounded-full text-sm font-medium">
                                            <i class="fas fa-robot mr-1"></i>
                                            Machine Learning
                                        </span>
                                </div>
                            </div>
                            <p class="text-xl text-gray-600 dark:text-gray-400 mb-6">
                                Simple and efficient tools for predictive data analysis.
                                Built on NumPy, SciPy, and matplotlib for machine learning in Python.
                            </p>

                            <!-- Stats -->
                            <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                                <div class="flex items-center">
                                    <div
                                        class="w-12 h-12 rounded-full bg-orange-100 dark:bg-orange-900/30 flex items-center justify-center text-[#F7931E] mr-3">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">70%</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Proficiency Level</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div
                                        class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center text-[#F7931E] mr-3">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">3+ years</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Experience</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div
                                        class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-[#F7931E] mr-3">
                                        <i class="fas fa-cogs"></i>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-gray-800 dark:text-gray-200">v1.3+</div>
                                        <div class="text-sm text-gray-600 dark:text-gray-400">Current Version</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Content -->
        <section class="py-16">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                        <!-- Main Content -->
                        <div class="lg:col-span-2 space-y-8">
                            <!-- About Scikit-learn -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-info-circle text-[#F7931E] mr-3"></i>
                                    About Scikit-learn
                                </h2>
                                <div class="content-section">
                                    <p>
                                        <strong>Scikit-learn</strong> is a free software machine learning library for
                                        Python.
                                        It features various classification, regression and clustering algorithms
                                        including
                                        support vector machines, random forests, gradient boosting, k-means and DBSCAN,
                                        and is designed to interoperate with the Python numerical and scientific
                                        libraries NumPy and SciPy.
                                    </p>

                                    <h3>Key Advantages</h3>
                                    <ul>
                                        <li><strong>Simple & Consistent API</strong> - Easy to learn and use across
                                            different algorithms
                                        </li>
                                        <li><strong>Comprehensive Documentation</strong> - Extensive examples and
                                            tutorials
                                        </li>
                                        <li><strong>Built on NumPy/SciPy</strong> - Efficient numerical computations
                                        </li>
                                        <li><strong>Open Source</strong> - Commercially usable under BSD license</li>
                                        <li><strong>Wide Algorithm Coverage</strong> - Classification, regression,
                                            clustering, dimensionality reduction
                                        </li>
                                        <li><strong>Model Evaluation</strong> - Comprehensive tools for model validation
                                            and selection
                                        </li>
                                        <li><strong>Data Preprocessing</strong> - Feature extraction, normalization, and
                                            transformation
                                        </li>
                                    </ul>

                                    <h3>Core Features</h3>
                                    <p>
                                        Scikit-learn provides tools for the entire machine learning workflow:
                                    </p>
                                    <ul>
                                        <li><strong>Classification</strong> - Identifying which category an object
                                            belongs to
                                        </li>
                                        <li><strong>Regression</strong> - Predicting a continuous-valued attribute</li>
                                        <li><strong>Clustering</strong> - Automatic grouping of similar objects</li>
                                        <li><strong>Dimensionality Reduction</strong> - Reducing the number of random
                                            variables
                                        </li>
                                        <li><strong>Model Selection</strong> - Comparing, validating and choosing
                                            parameters
                                        </li>
                                        <li><strong>Preprocessing</strong> - Feature extraction and normalization</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- My Scikit-learn Journey -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-road text-[#F7931E] mr-3"></i>
                                    My Journey with Scikit-learn
                                </h2>
                                <div class="content-section">
                                    <p>
                                        I started using Scikit-learn in 2021 as my primary machine learning library for
                                        Python projects.
                                        Over 3+ years, I've applied it across various domains including predictive
                                        modeling,
                                        customer segmentation, and anomaly detection. My experience ranges from simple
                                        classification
                                        tasks to complex ensemble methods and hyperparameter optimization.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                                        <div
                                            class="bg-gradient-to-br from-orange-50 to-amber-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-chart-line text-[#F7931E] mr-2"></i>
                                                Predictive Modeling
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Extensive experience building and deploying predictive models
                                                for classification and regression tasks across various business domains.
                                            </p>
                                        </div>
                                        <div
                                            class="bg-gradient-to-br from-purple-50 to-indigo-50 dark:from-gray-800 dark:to-gray-800 rounded-xl p-6">
                                            <h3 class="text-lg font-bold mb-3 flex items-center">
                                                <i class="fas fa-users text-purple-500 mr-2"></i>
                                                Customer Analytics
                                            </h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                Applied clustering algorithms for customer segmentation
                                                and recommendation systems for e-commerce applications.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- My Experience -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-user-check text-[#F7931E] mr-3"></i>
                                    My Experience with Scikit-learn
                                </h2>
                                <div class="content-section">
                                    <p>
                                        With 3+ years of hands-on experience, I've mastered Scikit-learn for various
                                        machine learning tasks and integrated it with the broader Python data science
                                        ecosystem.
                                    </p>

                                    <h3>Core Skills</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Classification algorithms</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Regression models</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Clustering techniques</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Model evaluation and validation</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Feature engineering and selection</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Hyperparameter tuning</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Pipeline creation</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span>Cross-validation strategies</span>
                                        </div>
                                    </div>

                                    <h3>Algorithm Expertise</h3>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-4">
                                        <span
                                            class="px-3 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg text-sm text-center">Random Forest</span>
                                        <span
                                            class="px-3 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm text-center">SVM</span>
                                        <span
                                            class="px-3 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm text-center">K-Means</span>
                                        <span
                                            class="px-3 py-2 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg text-sm text-center">Linear Models</span>
                                        <span
                                            class="px-3 py-2 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm text-center">XGBoost</span>
                                        <span
                                            class="px-3 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm text-center">PCA</span>
                                        <span
                                            class="px-3 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg text-sm text-center">KNN</span>
                                        <span
                                            class="px-3 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg text-sm text-center">Grid Search</span>
                                    </div>

                                    <h3>Machine Learning Workflow</h3>
                                    <ul>
                                        <li><strong>Data Preprocessing</strong> - Handling missing values, encoding
                                            categorical variables, feature scaling
                                        </li>
                                        <li><strong>Feature Engineering</strong> - Creating new features, polynomial
                                            features, interaction terms
                                        </li>
                                        <li><strong>Model Training</strong> - Training various algorithms with proper
                                            validation
                                        </li>
                                        <li><strong>Model Evaluation</strong> - Using appropriate metrics for different
                                            problem types
                                        </li>
                                        <li><strong>Hyperparameter Optimization</strong> - Grid search, random search,
                                            and Bayesian optimization
                                        </li>
                                        <li><strong>Model Deployment</strong> - Saving and loading models for production
                                            use
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Algorithm Categories -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-sitemap text-[#F7931E] mr-3"></i>
                                    Algorithm Categories
                                </h2>
                                <div class="content-section">
                                    <h3>Supervised Learning</h3>
                                    <p>
                                        Extensive experience with classification and regression algorithms:
                                    </p>
                                    <ul>
                                        <li><strong>Linear Models</strong> - Logistic regression, linear regression,
                                            ridge, lasso
                                        </li>
                                        <li><strong>Support Vector Machines</strong> - Classification and regression
                                            with different kernels
                                        </li>
                                        <li><strong>Tree-based Methods</strong> - Decision trees, random forests,
                                            gradient boosting
                                        </li>
                                        <li><strong>Naive Bayes</strong> - Gaussian, multinomial, and Bernoulli variants
                                        </li>
                                        <li><strong>K-Nearest Neighbors</strong> - Classification and regression</li>
                                        <li><strong>Neural Networks</strong> - Multi-layer perceptron classifier and
                                            regressor
                                        </li>
                                    </ul>

                                    <h3>Unsupervised Learning</h3>
                                    <p>
                                        Experience with clustering and dimensionality reduction:
                                    </p>
                                    <ul>
                                        <li><strong>Clustering</strong> - K-means, DBSCAN, hierarchical clustering,
                                            Gaussian mixtures
                                        </li>
                                        <li><strong>Dimensionality Reduction</strong> - PCA, t-SNE, UMAP, feature
                                            selection methods
                                        </li>
                                        <li><strong>Anomaly Detection</strong> - Isolation forest, local outlier factor
                                        </li>
                                        <li><strong>Density Estimation</strong> - Kernel density estimation</li>
                                    </ul>

                                    <h3>Model Selection & Evaluation</h3>
                                    <p>
                                        Mastered techniques for model validation and selection:
                                    </p>
                                    <ul>
                                        <li>Cross-validation strategies (k-fold, stratified, time series)</li>
                                        <li>Hyperparameter tuning (grid search, random search)</li>
                                        <li>Performance metrics (accuracy, precision, recall, F1, ROC-AUC)</li>
                                        <li>Learning curves and validation curves</li>
                                        <li>Feature importance analysis</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Feature Engineering & Preprocessing -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-cogs text-[#F7931E] mr-3"></i>
                                    Feature Engineering & Preprocessing
                                </h2>
                                <div class="content-section">
                                    <p>
                                        I have extensive experience with Scikit-learn's preprocessing and feature
                                        engineering capabilities:
                                    </p>

                                    <h3>Data Preprocessing</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#F7931E] mb-2">Scaling & Normalization</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                StandardScaler, MinMaxScaler, RobustScaler,
                                                and normalization techniques for different data distributions
                                            </p>
                                        </div>
                                        <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#F7931E] mb-2">Encoding Categorical
                                                Variables</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                OneHotEncoder, LabelEncoder, OrdinalEncoder
                                                for handling categorical features
                                            </p>
                                        </div>
                                        <div class="bg-purple-50 dark:bg-purple-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#F7931E] mb-2">Handling Missing Values</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                SimpleImputer, KNNImputer for different
                                                missing data strategies
                                            </p>
                                        </div>
                                        <div class="bg-orange-50 dark:bg-orange-900/20 p-4 rounded-lg">
                                            <h4 class="font-semibold text-[#F7931E] mb-2">Feature Transformation</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                                PolynomialFeatures, FunctionTransformer
                                                for creating new features
                                            </p>
                                        </div>
                                    </div>

                                    <h3>Pipelines & Workflow</h3>
                                    <p>
                                        Experience building robust machine learning pipelines:
                                    </p>
                                    <ul>
                                        <li><strong>Pipeline Creation</strong> - Chaining preprocessing and modeling
                                            steps
                                        </li>
                                        <li><strong>ColumnTransformer</strong> - Applying different transformations to
                                            different columns
                                        </li>
                                        <li><strong>FeatureUnion</strong> - Combining multiple feature extraction
                                            methods
                                        </li>
                                        <li><strong>Custom Transformers</strong> - Creating custom preprocessing steps
                                        </li>
                                        <li><strong>Model Persistence</strong> - Saving and loading entire pipelines
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Real-world Applications -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-chart-bar text-[#F7931E] mr-3"></i>
                                    Real-world Applications
                                </h2>
                                <div class="content-section">
                                    <h3>Business Applications</h3>
                                    <p>
                                        Applied Scikit-learn to solve real business problems across various domains:
                                    </p>
                                    <ul>
                                        <li><strong>Customer Churn Prediction</strong> - Classification models to
                                            predict customer attrition
                                        </li>
                                        <li><strong>Sales Forecasting</strong> - Time series and regression models for
                                            demand prediction
                                        </li>
                                        <li><strong>Credit Risk Assessment</strong> - Classification for loan approval
                                            decisions
                                        </li>
                                        <li><strong>Customer Segmentation</strong> - Clustering for marketing strategy
                                            development
                                        </li>
                                        <li><strong>Recommendation Systems</strong> - Collaborative filtering and
                                            content-based recommendations
                                        </li>
                                        <li><strong>Fraud Detection</strong> - Anomaly detection for financial
                                            transactions
                                        </li>
                                    </ul>

                                    <h3>Industry Projects</h3>
                                    <ul>
                                        <li><strong>E-commerce</strong> - Product recommendation and customer lifetime
                                            value prediction
                                        </li>
                                        <li><strong>Healthcare</strong> - Disease prediction and patient readmission
                                            risk
                                        </li>
                                        <li><strong>Finance</strong> - Stock price prediction and portfolio optimization
                                        </li>
                                        <li><strong>Marketing</strong> - Customer segmentation and campaign optimization
                                        </li>
                                        <li><strong>Manufacturing</strong> - Predictive maintenance and quality control
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Model Evaluation & Optimization -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fas fa-tachometer-alt text-[#F7931E] mr-3"></i>
                                    Model Evaluation & Optimization
                                </h2>
                                <div class="content-section">
                                    <p>
                                        I have extensive experience with model evaluation and hyperparameter
                                        optimization techniques:
                                    </p>

                                    <h3>Evaluation Metrics</h3>
                                    <ul>
                                        <li><strong>Classification</strong> - Accuracy, precision, recall, F1-score,
                                            ROC-AUC, confusion matrix
                                        </li>
                                        <li><strong>Regression</strong> - MAE, MSE, RMSE, R², explained variance</li>
                                        <li><strong>Clustering</strong> - Silhouette score, Calinski-Harabasz index,
                                            Davies-Bouldin index
                                        </li>
                                        <li><strong>Cross-validation</strong> - K-fold, stratified, time series, and
                                            grouped cross-validation
                                        </li>
                                    </ul>

                                    <h3>Hyperparameter Optimization</h3>
                                    <ul>
                                        <li><strong>GridSearchCV</strong> - Exhaustive search over specified parameter
                                            values
                                        </li>
                                        <li><strong>RandomizedSearchCV</strong> - Random search over parameter
                                            distributions
                                        </li>
                                        <li><strong>Bayesian Optimization</strong> - Using scikit-optimize and Optuna
                                            integration
                                        </li>
                                        <li><strong>Learning Curves</strong> - Diagnosing bias-variance tradeoff</li>
                                        <li><strong>Validation Curves</strong> - Tuning individual hyperparameters</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- GitHub Projects -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 fade-in">
                                <h2 class="text-2xl font-bold mb-6 flex items-center">
                                    <i class="fab fa-github text-[#F7931E] mr-3"></i>
                                    Projects on GitHub
                                </h2>
                                <div class="content-section">
                                    <p>
                                        Some of my Scikit-learn machine learning projects can be found on GitHub:
                                    </p>
                                    <div class="mt-4">
                                        <a href="https://github.com/SirAndrewGotham" target="_blank"
                                           class="inline-flex items-center px-4 py-2 bg-gray-800 hover:bg-gray-900 text-white rounded-lg font-medium transition-colors">
                                            <i class="fab fa-github mr-2"></i>
                                            <span>SirAndrewGotham on GitHub</span>
                                        </a>
                                    </div>
                                    <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                        I continuously work on machine learning projects that demonstrate practical
                                        applications
                                        of Scikit-learn for classification, regression, clustering, and other ML tasks.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Sidebar -->
                        <div class="space-y-6">
                            <!-- Proficiency Card -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-chart-bar text-[#F7931E] mr-2"></i>
                                    Proficiency Level
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Overall Proficiency</span>
                                            <span class="text-sm font-bold text-[#F7931E]">70%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                                            <div
                                                class="skill-bar-inner h-3 rounded-full bg-gradient-to-r from-[#F7931E] to-[#FFB347]"
                                                data-width="70%" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Classification</span>
                                            <span class="text-sm font-bold text-green-500">75%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-green-500" data-width="75%"
                                                 style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Regression</span>
                                            <span class="text-sm font-bold text-blue-500">72%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-blue-500" data-width="72%"
                                                 style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Clustering</span>
                                            <span class="text-sm font-bold text-purple-500">68%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-purple-500" data-width="68%"
                                                 style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between mb-1">
                                            <span class="text-sm">Model Evaluation</span>
                                            <span class="text-sm font-bold text-red-500">73%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="skill-bar-inner h-2 rounded-full bg-red-500" data-width="73%"
                                                 style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Quick Facts -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-lightbulb text-[#F7931E] mr-2"></i>
                                    Quick Facts
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-center">
                                        <i class="fas fa-calendar text-[#F7931E] w-5 mr-3"></i>
                                        <span class="text-sm">Experience: <strong>3+ years</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-code text-[#F7931E] w-5 mr-3"></i>
                                        <span class="text-sm">Version: <strong>Scikit-learn 1.3+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-project-diagram text-[#F7931E] w-5 mr-3"></i>
                                        <span class="text-sm">Projects: <strong>15+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-cogs text-[#F7931E] w-5 mr-3"></i>
                                        <span class="text-sm">Algorithms: <strong>20+</strong></span>
                                    </div>
                                    <div class="flex items-center">
                                        <i class="fas fa-rocket text-[#F7931E] w-5 mr-3"></i>
                                        <span class="text-sm">Status: <strong>Active Learning</strong></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Learning Path -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-graduation-cap text-[#F7931E] mr-2"></i>
                                    Learning Path
                                </h3>
                                <div class="space-y-3">
                                    <div class="flex items-start">
                                        <div
                                            class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Basic classification & regression</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div
                                            class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Model evaluation metrics</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div
                                            class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Feature preprocessing</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div
                                            class="w-6 h-6 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center text-green-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-check text-xs"></i>
                                        </div>
                                        <span class="text-sm">Clustering algorithms</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div
                                            class="w-6 h-6 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-spinner text-xs"></i>
                                        </div>
                                        <span class="text-sm">Ensemble methods</span>
                                    </div>
                                    <div class="flex items-start">
                                        <div
                                            class="w-6 h-6 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-gray-500 mr-3 mt-0.5 flex-shrink-0">
                                            <i class="fas fa-clock text-xs"></i>
                                        </div>
                                        <span class="text-sm">Neural networks integration</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Related Competences -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 fade-in">
                                <h3 class="text-lg font-bold mb-4 flex items-center">
                                    <i class="fas fa-network-wired text-[#F7931E] mr-2"></i>
                                    Related Competences
                                </h3>
                                <div class="space-y-2">
                                    <a href="/competences/python"
                                       class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div
                                            class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center text-white mr-3">
                                            <i class="fab fa-python text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#F7931E] transition-colors">
                                                Python
                                            </div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">70% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#F7931E] transition-colors"></i>
                                    </a>
                                    <a href="/competences/pandas"
                                       class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div
                                            class="w-8 h-8 rounded-lg bg-[#150458] flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-table text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#F7931E] transition-colors">
                                                Pandas
                                            </div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">80% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#F7931E] transition-colors"></i>
                                    </a>
                                    <a href="/competences/numpy"
                                       class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div
                                            class="w-8 h-8 rounded-lg bg-[#4D77CB] flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-calculator text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#F7931E] transition-colors">
                                                NumPy
                                            </div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">78% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#F7931E] transition-colors"></i>
                                    </a>
                                    <a href="/competences/matplotlib"
                                       class="flex items-center p-3 rounded-lg bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors group">
                                        <div
                                            class="w-8 h-8 rounded-lg bg-[#11557C] flex items-center justify-center text-white mr-3">
                                            <i class="fas fa-chart-line text-sm"></i>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="font-medium group-hover:text-[#F7931E] transition-colors">
                                                Matplotlib
                                            </div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">75% proficiency</div>
                                        </div>
                                        <i class="fas fa-chevron-right text-gray-400 group-hover:text-[#F7931E] transition-colors"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Call to Action -->
                            <div
                                class="bg-gradient-to-r from-[#F7931E] to-[#FFB347] rounded-xl shadow-lg p-6 text-white fade-in">
                                <h3 class="text-lg font-bold mb-2">Interested in collaboration?</h3>
                                <p class="text-sm mb-4">Ready to discuss your machine learning project</p>
                                <a href="/contact"
                                   class="inline-flex items-center justify-center w-full px-4 py-2 bg-white text-[#F7931E] font-medium rounded-lg hover:bg-gray-100 transition-colors">
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
