<x-frontend.layouts.app>
    <!-- Main Content -->
    <main class="w-full pt-20">
        <!-- Hero Section -->
        <section class="py-16 bg-gradient-to-br from-primary-50 to-blue-50 dark:from-gray-800 dark:to-gray-900">
            <div class="fluid-container">
                <div class="max-w-6xl mx-auto text-center fade-in">
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">Компетенции & Навыки</h1>
                    <p class="text-xl text-gray-600 dark:text-gray-400 mb-8 max-w-3xl mx-auto">
                        Более 12 лет опыта в веб-разработке, охватывающих полный стек технологий - от backend до frontend,
                        DevOps и методологий разработки. Постоянное обучение и адаптация к новым технологиям.
                    </p>
                    <div class="flex flex-wrap justify-center gap-6">
                        <div class="flex items-center bg-white dark:bg-gray-800 px-4 py-2 rounded-lg shadow-sm">
                            <i class="fas fa-code text-primary-500 mr-2"></i>
                            <span>16+ ключевых компетенций</span>
                        </div>
                        <div class="flex items-center bg-white dark:bg-gray-800 px-4 py-2 rounded-lg shadow-sm">
                            <i class="fas fa-calendar-alt text-primary-500 mr-2"></i>
                            <span>12+ лет опыта</span>
                        </div>
                        <div class="flex items-center bg-white dark:bg-gray-800 px-4 py-2 rounded-lg shadow-sm">
                            <i class="fas fa-certificate text-primary-500 mr-2"></i>
                            <span>Постоянное обучение</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Categories Navigation -->
        <section class="py-8 border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800">
            <div class="fluid-container">
                <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">
                    <!-- Category Filters -->
                    <div class="flex flex-wrap gap-2">
                        <template x-for="category in categories" :key="category.id">
                            <button
                                @click="activeCategory = category.id"
                                :class="activeCategory === category.id
                                    ? 'bg-primary-500 text-white'
                                    : 'bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-600'"
                                class="px-4 py-2 rounded-lg font-medium transition-colors flex items-center"
                            >
                                <i :class="category.icon" class="mr-2 text-sm"></i>
                                <span x-text="category.name"></span>
                                <span class="ml-2 px-1.5 py-0.5 bg-white dark:bg-gray-800 text-xs rounded-full"
                                      :class="activeCategory === category.id ? 'text-primary-500' : 'text-gray-500'"
                                      x-text="category.count"></span>
                            </button>
                        </template>
                    </div>

                    <!-- Search and Sort -->
                    <div class="flex flex-col sm:flex-row gap-4">
                        <!-- Search -->
                        <div class="relative">
                            <input
                                type="text"
                                x-model="searchQuery"
                                placeholder="Поиск компетенций..."
                                class="pl-10 pr-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-colors w-full sm:w-64"
                            >
                            <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        </div>

                        <!-- Sort -->
                        <select x-model="sortBy" class="px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-colors">
                            <option value="proficiency">По уровню владения</option>
                            <option value="experience">По опыту</option>
                            <option value="name">По названию</option>
                        </select>
                    </div>
                </div>
            </div>
        </section>

        <!-- Competences Grid -->
        <section class="py-16">
            <div class="fluid-container">
                <!-- Stats Summary -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-12 fade-in">
                    <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg text-center">
                        <div class="text-2xl font-bold text-primary-500 mb-2" x-text="totalCompetences">16</div>
                        <div class="text-gray-600 dark:text-gray-400">Всего компетенций</div>
                    </div>
                    <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg text-center">
                        <div class="text-2xl font-bold text-green-500 mb-2" x-text="expertCompetences">5</div>
                        <div class="text-gray-600 dark:text-gray-400">Экспертный уровень</div>
                    </div>
                    <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg text-center">
                        <div class="text-2xl font-bold text-blue-500 mb-2" x-text="maxExperience">12</div>
                        <div class="text-gray-600 dark:text-gray-400">Макс. опыт (лет)</div>
                    </div>
                    <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg text-center">
                        <div class="text-2xl font-bold text-purple-500 mb-2" x-text="totalCategories">6</div>
                        <div class="text-gray-600 dark:text-gray-400">Категорий</div>
                    </div>
                </div>

                <!-- Competences Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6" x-show="filteredCompetences.length > 0">
                    <template x-for="competence in filteredCompetences" :key="competence.id">
                        <div class="competence-card bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 hover:shadow-xl transition-all duration-300 border border-transparent hover:border-primary-200 dark:hover:border-primary-800 block fade-in">
                            <!-- Header -->
                            <div class="flex items-start justify-between mb-4">
                                <div class="flex items-center space-x-3">
                                    <div :class="'w-12 h-12 rounded-lg bg-gradient-to-r ' + competence.color + ' flex items-center justify-center text-white'">
                                        <i :class="competence.icon" class="text-lg"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-semibold" x-text="competence.name"></h3>
                                        <div class="flex items-center space-x-2 mt-1">
                                            <span class="text-sm text-gray-500 dark:text-gray-400" x-text="competence.years + ' лет'"></span>
                                            <span class="text-xs px-2 py-1 rounded-full bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-300"
                                                  x-text="getProficiencyText(competence.proficiency)"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <div class="text-2xl font-bold" :class="getProficiencyColor(competence.proficiency)"
                                         x-text="competence.proficiency + '%'"></div>
                                </div>
                            </div>

                            <!-- Description -->
                            <p class="text-gray-600 dark:text-gray-400 text-sm mb-4" x-text="competence.description"></p>

                            <!-- Progress Bar -->
                            <div class="mb-4">
                                <div class="flex justify-between text-xs text-gray-500 dark:text-gray-400 mb-1">
                                    <span>Уровень владения</span>
                                    <span x-text="competence.proficiency + '%'"></span>
                                </div>
                                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                    <div class="skill-bar-inner h-2 rounded-full bg-gradient-to-r"
                                         :class="competence.color"
                                         :data-width="competence.proficiency + '%'"
                                         style="width: 0%"></div>
                                </div>
                            </div>

                            <!-- Tags -->
                            <div class="flex flex-wrap gap-1">
                                <template x-for="tag in competence.tags.slice(0, 3)" :key="tag">
                                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-400 rounded text-xs"
                                          x-text="tag"></span>
                                </template>
                                <span x-show="competence.tags.length > 3"
                                      class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-400 rounded text-xs">
                                    +<span x-text="competence.tags.length - 3"></span>
                                </span>
                            </div>

                            <!-- Featured Badge -->
                            <div x-show="competence.featured" class="mt-3 flex justify-end">
                                <span class="px-2 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded text-xs flex items-center">
                                    <i class="fas fa-star mr-1 text-xs"></i>
                                    Ключевая компетенция
                                </span>
                            </div>
                        </div>
                    </template>
                </div>

                <!-- Empty State -->
                <div x-show="filteredCompetences.length === 0" class="text-center py-12 fade-in">
                    <div class="w-24 h-24 rounded-full bg-gray-100 dark:bg-gray-800 flex items-center justify-center text-gray-400 mx-auto mb-4">
                        <i class="fas fa-search text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Компетенции не найдены</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-6">Попробуйте изменить критерии поиска или выбрать другую категорию</p>
                    <button @click="searchQuery = ''; activeCategory = 'all'" class="px-6 py-3 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition-colors">
                        Сбросить фильтры
                    </button>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="py-16 bg-gray-50 dark:bg-gray-800/30">
            <div class="fluid-container">
                <div class="max-w-4xl mx-auto text-center fade-in">
                    <h2 class="text-3xl font-bold mb-6">Готовы к сотрудничеству?</h2>
                    <p class="text-xl text-gray-600 dark:text-gray-400 mb-8">
                        Обладая этим широким спектром компетенций, я готов взяться за сложные проекты
                        и обеспечить высокое качество разработки на всех этапах.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="/portfolio" class="inline-flex items-center px-8 py-3 bg-primary-500 hover:bg-primary-600 text-white rounded-lg font-medium transition-colors shadow-lg">
                            <i class="fas fa-eye mr-2"></i>
                            <span>Посмотреть проекты</span>
                        </a>
                        <a href="/contact" class="inline-flex items-center px-8 py-3 border border-primary-500 text-primary-500 hover:bg-primary-50 dark:hover:bg-primary-900/20 rounded-lg font-medium transition-colors">
                            <i class="fas fa-envelope mr-2"></i>
                            <span>Обсудить проект</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-frontend.layouts.app>
