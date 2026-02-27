Schema::create('categories', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->nullable()->constrained();
    $table->string('name');
    $table->timestamps();
});