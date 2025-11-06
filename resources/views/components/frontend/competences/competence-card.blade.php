<a :href="competence.link" class="competence-card bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 hover:shadow-xl transition-all duration-300 border border-transparent hover:border-primary-200 dark:hover:border-primary-800 block">
<!-- Header -->
    <div class="flex items-start justify-between mb-4">
        <div class="flex items-center space-x-3">
            <div class="tech-icon"
                 :style="'background: linear-gradient(135deg, ' + competence.color + ', ' + competence.color + 'cc)'">
                <i :class="competence.icon + ' text-lg'"></i>
            </div>
            <div>
                <h3 class="text-lg font-semibold" x-text="competence.name"></h3>
                <div class="flex items-center space-x-2 mt-1">
                    <span class="text-sm text-gray-500 dark:text-gray-400" x-text="competence.years + ' {{ __('gothamfolio.competences.years') }}'"></span>
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
            <span>{{ __('gothamfolio.competences.proficiency_level') }}</span>
            <span x-text="competence.proficiency + '%'"></span>
        </div>
        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
            <div class="skill-bar h-2 rounded-full transition-all duration-1000"
                 :style="'background: linear-gradient(135deg, ' + competence.color + ', ' + competence.color + 'cc); width: ' + competence.proficiency + '%'"></div>
        </div>
    </div>

    <!-- Tags -->
    <div class="flex flex-wrap gap-1" x-show="competence.tags && competence.tags.length > 0">
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
            {{ __('gothamfolio.competences.key_competence') }}
        </span>
    </div>
</a>
